<?php

define('DB_SERVER', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'kungsgatan40');
define('DB', 'interiory');

$DB = new mysqli(DB_SERVER, DB_LOGIN, DB_PASSWORD);
$DB->select_db(DB);

if (!$DB) {
    die('Could not connect: ' . mysqli_error());
}
