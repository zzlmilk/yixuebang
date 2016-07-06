<?php

class MysqlException extends Exception {

    public $backtrace;

    public function __construct($message = false, $code = false) {
        if (!$message) {
            $this->message = mysql_error();
        }
        if (!$code) {
            $this->code = mysql_errno();
        }
        $this->backtrace = debug_backtrace();
    }

    public function __get($name) {
        return $this->$name;
    }

}

class Db {

    private static $link;
    public $options;
    private $result;
    private $log_file;
    private $port = 5432;
    public $dbname;
    public $dbpassword;
    public $dbhost;
    public $dbuser;
    public $db_change = 0;
    // 查询表达式
    protected $selectSql = 'SELECT%DISTINCT% %FIELD% FROM %TABLE%%JOIN%%WHERE%%GROUP%%HAVING%%ORDER%%LIMIT%%OFFSET%%UNION%%COMMENT%';

    public function __construct() {

        //$this->connect();

        $this->db_change = 0;

        //$this->log_file = SQLLog . date("Y_m_d") . '.log';
    }

    /**
     * 链接数据库
     */
    private function connect() {

        if ($this->db_change == 0) {

            $this->db(0);
        } else {

            $this->db_change = 0;
        }

        self::$link = mysql_connect($this->dbhost, $this->dbuser, $this->dbpassword);

        @mysql_query('set names utf8');

        mysql_select_db($this->dbname);

        return self::$link;
    }

    public function judgeDataBaseIsExsite($id) {
        
    }

    /**
     * 切换数据库 
     */
    public function db($key) {

        if (!empty($_ENV['database'][$key])) {

            $dbArray = $_ENV['database'][$key];

            $this->dbhost = $dbArray['DBHOST'];

            $this->dbname = $dbArray['DBNAME'];

            $this->dbuser = $dbArray['DBUSER'];

            $this->dbpassword = $dbArray['DBPASS'];

            $this->db_change = 1;
        }
    }

    public function setTableName($table_name) {

        $this->dbname = '"' . $table_name . '"';
    }

    /**
     * 查询
     */
    public function select($options) {

        $sql = $this->parseSql($this->selectSql, $options);

        return $this->getAll($sql);
    }

    public function getOnes($options) {

        $sql = $this->parseSql($this->selectSql, $options);

        return $this->getOne($sql);
    }

    public function getAll($sql) {

        $result = array();

        $this->queryDb($sql);


        $item = $this->fetchall_assoc();

        if (!empty($item)) {

            //$result[0] = $item[0];

            return $item;

            //$result[2] = count($item);
        }
    }

    public function getOne($sql) {

        $result = array();

        $this->queryDb($sql);


        $item = $this->fetchall_assoc();

        if (!empty($item)) {

            return $item[0];
        }
    }

    protected function parseSet($data) {

        if (is_array($data)) {

            foreach ($data as $k => $v) {

                $set[] = '' . trim($k) . '' . '=' . "'" . $this->makeStringDBSafe($v) . "'";
            }
        }

        return ' SET ' . implode(',', $set);
    }

    public function parseSql($sql, $options = array()) {
        $sql = str_replace(
                array('%TABLE%', '%DISTINCT%', '%FIELD%', '%JOIN%', '%WHERE%', '%GROUP%', '%HAVING%', '%ORDER%', '%LIMIT%','%OFFSET%' ,'%UNION%', '%COMMENT%'), array(
            $this->parseTable($options['table']),
            $this->parseDistinct(isset($options['distinct']) ? $options['distinct'] : false),
            $this->parseField(!empty($options['fields']) ? $options['fields'] : '*'),
            $this->parseJoin(!empty($options['join']) ? $options['join'] : ''),
            $this->parseWhere(!empty($options['where']) ? $options['where'] : ''),
            $this->parseOr(!empty($options['or']) ? $options['or'] : ''),
            $this->parseGroup(!empty($options['group']) ? $options['group'] : ''),
            $this->parseHaving(!empty($options['having']) ? $options['having'] : ''),
            $this->parseOrder(!empty($options['order']) ? $options['order'] : ''),
            $this->parseLimit(!empty($options['limit']) ? $options['limit'] : ''),
            $this->parseOffset(!empty($options['offset']) ? $options['offset'] : ''),
            $this->parseUnion(!empty($options['union']) ? $options['union'] : ''),
            $this->parseComment(!empty($options['comment']) ? $options['comment'] : '')
                ), $sql);
        return $sql;
    }

    public function update($option) {

        $sql = 'UPDATE '
                . '' . $this->parseTable($option['table']) . ''
                . $this->parseSet($option['update'])
                . $this->parseWhere(!empty($option['where']) ? $option['where'] : '')
                . $this->parseOrder(!empty($option['order']) ? $option['order'] : '')
                . $this->parseLimit(!empty($option['limit']) ? $option['limit'] : '');

        $result = $this->queryDb($sql);

        return $result;
    }

    public function delete($option) {

        $sql = 'DELETE FROM '
                . $this->parseTable($option['table'])
                . $this->parseWhere(!empty($option['where']) ? $option['where'] : '');

        $result = $this->queryDb($sql);

        return $result;
    }

    public function parseTable($tables) {

        if (is_string($tables)) {

            return $tables;
        }
    }

    public function parseDistinct($distinct) {
        
    }

    public function parseField($field) {

        return $field;
    }

    public function parseJoin($join) {

        if (is_string($join)) {


            return ' ' . $join;
        }
    }

    public function parseWhere($where) {

        if (is_string($where) && $where != '') {

            return ' WHERE ' . $where;
        } elseif (is_array($where)) {

            $wheres = ' WHERE 1';

            foreach ($where as $key => $value) {

                if (is_numeric($value)) {

                    $wheres.= ' AND ' . '"' . $key . '" = ' . "'" . $value . "'";
                } else {

                    $wheres.= ' AND ' . '"' . $key . '" like ' . "'" . $value . "'";
                }
            }
            return $wheres;
        } else {

            return '';
        }
    }

    public function parseOr($or) {

        if (is_string($or) && $or != '') {

            return ' AND (' . $or . ')';
        } elseif (is_array($or)) {

            $ors = '  AND  (';

            foreach ($or as $key => $value) {


                if (is_numeric($value)) {

                    $ors.=' OR `' . $key . '` = ' . $value;
                } else {

                    $ors.=' OR `' . $key . '` like "' . $value . '"';
                }
            }
            return $ors . ' ) ';
        } else {

            return '';
        }
    }

    public function parseGroup($group) {

        $str = '';

        if (is_array($group)) {

            $group_all = implode(',', $group);

            $str .= 'GROUP BY ' . $group_all;
        } elseif (is_string($group) && $group != '') {

            $str.=' GROUP BY ' . $group;
        }

        return $str;
    }

    public function parseHaving($having) {
        
    }

    public function parseOrder($order) {

        if (is_string($order) && $order != '') {

            return ' ORDER BY ' . $order;
        } elseif (is_array($order)) {

            $array = array();

            foreach ($order as $key => $value) {

                if (is_numeric($key)) {
                    $array[] = $value;
                } else {
                    $array[] = $key . ' ' . $value;
                }
            }

            $order = implode(',', $array);

            return ' ORDER BY ' . $order;
        } else {

            return $order;
        }
    }

    public function parseOffset($offset){

        if(is_numeric($offset)){

            return ' OFFSET  '.$offset; 

        } else{

            return '';
        }

    }


    public function parseLimit($limit) {


        return !empty($limit) ? ' LIMIT ' . $limit . ' ' : '';
    }

    public function parseUnion($union) {
        
    }

    public function parseComment($comment) {
        
    }

    public function add($data, $options, $replace = false) {

        if (is_array($data)) {

            foreach ($data as $k => $v) {

                $fields[] = '' . trim($k) . '';

                $values[] = "'" . $this->makeStringDBSafe($v) . "'";
            }

            $sql = ($replace ? 'REPLACE' : 'INSERT') . ' INTO ' . '' . $this->parseTable($options['table']) . '' . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')';

            $this->queryDb($sql);

            return mysql_insert_id();
        }
    }

    public function queryDb($sql) {

        $link = $this->connect();

        $this->result = mysql_query($sql, $link);
       

        $pagestartime = microtime();

        $pageendtime = microtime();

        $starttime = explode(" ", $pagestartime);

        $endtime = explode(" ", $pageendtime);

        $totaltime = $endtime[0] - $starttime[0] + $endtime[1] - $starttime[1];

        $timecost = sprintf("%s", $totaltime);

        //echo $sql."<br />";

        //log_write($sql.'---耗时:'.$timecost, $this->log_file, 'SQL');

        if (!$this->result) {
            throw new MysqlException;
        } else {

            return true;
        }
    }

    public function fetchall_assoc() {

        $retval = array();
        while ($row = $this->fetch_assoc()) {
            $retval[] = $row;
        }
        return $retval;
    }

    public function fetch_assoc() {
        
        return mysql_fetch_assoc($this->result);

        //return pg_fetch_assoc($this->result);
    }

    public function makeStringDBSafe($value) {

        if(!empty($value)){

            if(is_string($value)){

                $value = str_replace("'","''",$value);

                return mysql_escape_string($value);
            } else{

                return mysql_escape_string(json_encode($value));
            }
        } else{

            return $value;
        }

        
    }

}

?>