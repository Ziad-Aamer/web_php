<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	$connect=mysql_connect('localhost','root','');
	mysql_select_db('dbd',$connect);
	$createNewTableQ= "create table users(username varchar(30) primary key,password varchar(30),hint varchar(30));";
	//insert into users values('Ahemd',1234,'WA Pass1')
	//insert into users values('Moh',12345,'WA Pass2')
	//insert into users values('Omar',123456,'WA Pass3')
	//Sign up // insert new user

	$UN=$_POST['un'];
	$PAS=$_POST['pass'];

	
		$strQ="select * from users where username='$UN'";
		$strResult=mysql_query($strQ);

		if(mysql_num_rows($strResult)>0)
		{
			$arr=mysql_fetch_array($strResult);
				$NewUn=$arr['username'];
				$NewPass=$arr['password'];
				$hint=$arr['hint'];
			
			if($NewPass!=$PAS)
			{
				echo $hint;
			}
			else{
					echo "Welcome ".$UN;
			}
			
		}
		else
		{
			echo "Error ,Wrong username and password<br>";
		}
	mysql_close();
?>