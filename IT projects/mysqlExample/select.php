<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$connect = mysql_connect("localhost", "root", "");
$db = mysql_select_db("dbd", $connect) or exit("<h1>Error</h1>".mysql_error());
$strSQL  = "select * from users";    
$strResult = mysql_query($strSQL);

echo "<table border=1>";
echo "<tr><th>User Name</th><th>Password</th></tr>";
while($fch = mysql_fetch_array($strResult))
    {
        $u = $fch['username'];
        $p = $fch['password'];   
		echo "<tr><td>".$u."</td>";
		echo "<td>".$p."</td></tr>";				
    }
echo "</table>";		 
mysql_close();

?>
