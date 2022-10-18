<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "pglife";

$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$connection){
    echo "Error" .mysqli_connect_error;
    exit;
}
?>