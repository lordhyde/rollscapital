<?php
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="rolls_capital";

// $db_host="localhost";
// $db_user="tfgmvsmy_rollscap";
// $db_pass="yUbyrhDim#^trz3q";
// $db_name="tfgmvsmy_rolls_capital";
	
require_once('DBConnection.php');

$db = new DBConnection($db_host, $db_user, $db_pass, $db_name);
