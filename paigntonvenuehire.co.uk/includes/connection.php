<?php
require("../assets/includes/constants.php");

// 1. Create a database connection
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}

$res = mysql_query("SELECT * FROM `services` WHERE `id` = 4");

$result = mysql_fetch_assoc($res);

$twitter_widget_id = "350198182044647424";
?>
