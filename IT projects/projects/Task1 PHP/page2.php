<?php
	$age=$_POST['Age'];
	$Name=$_POST['Name'];
	if(age>22 && name!="")
	{
         echo"<table>
             <tr><th>Name</th><th>Age</th></tr>
             <tr><td>$Name</td><td>$age</td></tr>
         </table>";

	}
	else
	{
		echo "not valid";
	}
?>