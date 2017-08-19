<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$n = $_POST['u'];
$pass = $_POST['p'];

$connect = mysql_connect("localhost", "root", "");
$db = mysql_select_db("dbd", $connect) or exit("<h1>Error</h1>".mysql_error());


$strSQL  = "insert into users values('$n','$pass')";  

$strResult = mysql_query($strSQL);
echo "User\"".$n ."\"Added Succesfully";
mysql_close();

?>