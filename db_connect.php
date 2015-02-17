<?php

define('DB_SERVER', 'localhost');
define('DB_LOGIN', 'sawe0044');
define('DB_PASSWORD', 'sawe004471577-my');
define('DB', 'sawe0044');

//mysql_connect(DB_SERVER, DB_LOGIN, DB_PASSWORD) or die (mysql_errno());
//mysql_select_db(DB);

$DB = new mysqli(DB_SERVER, DB_LOGIN, DB_PASSWORD);
$DB->select_db(DB);

if (!$DB) {
    die('Could not connect: ' . mysqli_error());
}
