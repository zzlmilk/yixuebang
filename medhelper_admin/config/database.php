<?php

function setDB($key) {

    $_ENV['database'][$key] = $_ENV['db'];
}

function unsetDB($key) {

    if (!empty($_ENV['database'][$key])) {

        unset($_ENV['database'][$key]);
    }
}

function setDefaultDatabases() {

    $_ENV['db']['DBUSER'] = 'root';

    $_ENV['db']['DBPASS'] = '123456';

    $_ENV['db']['DBHOST'] = 'localhost';

    $_ENV['db']['DBNAME'] = 'medhelper';

    setDB(0);
}



function setDatabase($array, $key) {

    if (!empty($array['dbuser'])) {

        $_ENV['db']['DBUSER'] = $array['dbuser'];
    }

    if (!empty($array['dbpass'])) {

        $_ENV['db']['DBPASS'] = $array['dbpass'];
    }

    if (!empty($array['dbhost'])) {

        $_ENV['db']['DBHOST'] = $array['dbhost'];
    }

    if (!empty($array['dbname'])) {

        $_ENV['db']['DBNAME'] = $array['dbname'];
    }

    if (!empty($key)) {

        setDB($key);
    }
}

function setDataBaseUser($DBUSER, $key) {

    if (!empty($DBUSER) && !empty($key)) {

        $_ENV['db']['DBUSER'] = $DBUSER;

        setDB($key);
    }
}

function setDataBasePass($password, $key) {

    if (!empty($password) && !empty($key)) {

        $_ENV['db']['DBPASS'] = $password;

        setDB($key);
    }
}

function setDataBaseHost($host, $key) {

    if (!empty($host) && !empty($key)) {

        $_ENV['db']['DBHOST'] = $host;

        setDB($key);
    }
}

function setDataBaseName($dbname, $key) {

    if (!empty($dbname) && !empty($key)) {

        $_ENV['db']['DBNAME'] = $dbname;

        setDB($key);
    }
}

setDefaultDatabases();

?>