<?php

require 'Db.class.php';

class ActiveRecord extends Db {

    public $field_array = array();

    public function setFieldValue($field, $value) {

        if (!empty($field) && isset($value)) {

            $this->field_array[$field] = $value;
        }
    }

    public function joinFieldValue() {

        $where = '';

        if ($this->field_array != NULL && count($this->field_array) > 0) {

            foreach ($this->field_array as $k => $v) {

                $temp = '';

                if (is_string($v)) {

                    switch ($v) {

                        case 'null':

                            $temp = " is null";

                            break;

                        case 'not null':

                            $temp = " is not null";

                            break;

                        default:

                            $temp = " like '" . $v . "'";
                    }

                    $temp = $k . $temp;
                } else {

                    $temp = $k . " = " . $v;
                }

                if (!empty($where)) {

                    $where.=' and ' . $temp;
                } else {

                    $where = $temp;
                }
            }
        }

        return $where;
    }

    public function offset($offset) {

        if (isset($offset)) {

            $this->options['offset'] = $offset;

            return $this;
        }
    }

    public function where($where) {

        if(!empty($where)){

            $this->options['where'] = $where;
        }

        return $this;
    }

    /**
     * 指定查询数量
     * @access public
     * @param mixed $offset 起始位置
     * @param mixed $length 查询数量
     * @return Model
     */
    public function limit($offset, $length = null) {
        if (is_null($length) && strpos($offset, ',')) {
            list($offset, $length) = explode(',', $offset);
        }
        $this->options['limit'] = intval($offset) . ( $length ? ',' . intval($length) : '' );

        return $this;
    }

    /**
     * 
     */
    public function join($join, $method = 'LEFT JOIN') {

        if (is_string($join)) {

            $this->options['join'] = $method . ' ' . $join;
        }

        return $this;
    }

    public function query($sql) {

        if (!empty($sql)) {

            parent::queryDb($sql);

            return parent::fetchall_assoc();
        }
    }

    /**
     * 
     */
    public function db($key) {

        parent::db($key);

        return $this;
    }

    /**
     * 获取所有的数据
     */
    public function select($options = array()) {

        $option = $this->_parseOptions($options);

        $result = parent::select($option);

        return $result;
    }

    public function find($options = array()) {



        $option = $this->_parseOptions($options);

        $result = parent::getOnes($option);

        return $result;
    }

    /**
     *  插入操作
     */
    public function add($data = '') {

        if (is_array($data)) {

            $option = $this->_parseOptions($options = array());

            return parent::add($data, $option);
        }
    }

    /**
     *  保存 
     */
    public function save($update = array()) {

        if (is_array($update)) {

            $this->options['update'] = $update;

            $option = $this->_parseOptions();

            return parent::update($option);
        }
    }

    /**
     * 删除
     */
    public function delete() {

        $option = $this->_parseOptions();

        return parent::delete($option);
    }

    public function ors($ors) {

        $this->options['or'] = $ors;

        return $this;
    }

    /**
     * 排序  支持字符串 和 数组的形式
     */
    public function order($orderby) {

        $this->options['order'] = $orderby;

        return $this;
    }

    /**
     *  支持字符串和数组
     */
    public function group($group) {

        $this->options['group'] = $group;

        return $this;
    }

    /**
     * 根据条件来获取 需要的字段  支持array，string
     */
    public function field($field) {

        if (is_string($field)) {

            $this->options['fields'] = $field;
        } elseif (is_array($field)) {

            $this->options['fields'] = implode(',', $field);
        }

        return $this;
    }

    public function table($table_name) {

        $this->table_name = $table_name;

        return $this;
    }

    /**
     * 分析表达式
     * @access protected
     * @param array $options 表达式参数
     * @return array
     */
    protected function _parseOptions($options = array()) {
        if (is_array($this->options) && is_array($options)) {

            $options = @array_merge($this->options, $options);
        }

        if (!isset($options['table'])) {
            // 自动获取表名
            $options['table'] = $this->table_name;
        }

        // 查询过后清空sql表达式组装 避免影响下次查询
        $this->options = array();

        return $options;
    }

}

?>