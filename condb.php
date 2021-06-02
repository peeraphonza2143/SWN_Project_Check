<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "192.168.0.50";
$userName = "develop_db";
$userPassword = "SWN2021";
$dbName = "DB_develop";

$connectionInfo = array(
    "Database"=>$dbName,
    "UID"=>$userName,
    "PWD"=>$userPassword,
    "MultipleActiveResultSets"=>true);

$connect = sqlsrv_connect( $serverName, $connectionInfo);

if($connect === FALSE)
{
    die( print_r( sqlsrv_errors(), true));
}
?>