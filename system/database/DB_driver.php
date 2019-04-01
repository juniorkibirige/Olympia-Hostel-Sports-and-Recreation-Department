<?php
require 'db_includes.php';
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB', 'sportsandrecreation');
define('$HOME_PATH', 'system');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB);
if($con) {
   log_this('db_connect', 'Server connection successful', 'info');
}
 ?>
