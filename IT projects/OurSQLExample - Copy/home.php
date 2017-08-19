<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$connect=mysql_connect('localhost','root','');
	mysql_select_db('dbd',$connect);
	$createNewTableQ= "create table users(email varchar(30) primary key,username varchar(30),password varchar(30));";

	//Sign up // insert new user
	$EM=$_POST['em'];
	$PAS=$_POST['pass'];

	if(isset($_POST['un']))
	{
		
		$UN=$_POST['un'];
		$strQ="insert into users values('$EM','$UN','$PAS')";
		$strResult=mysql_query($strQ);
		echo "Welcome ".$UN;
	}
	else
	{
		$strQ="select * from users where email='$EM' and password='$PAS'";
		$strResult=mysql_query($strQ);
		if(mysql_num_rows($strResult)>0)
		{
			while ($arr=mysql_fetch_array($strResult)) {
				$UN=$arr['username'];
			}
			echo "Welcome ".$UN;
		}
		else
		{
			echo "Error ,Wrong e-mail or passord<br>";
			header("Location: Login.php");
     		 exit;
		}
	}
	mysql_close();
?>