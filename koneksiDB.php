<?php
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'db_galang');
define('DB_SERVER', 'localhost');



try {
    if ($conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE)) {
        echo "";
    } else {
        throw new Exception('Unable to connect');
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
