<?php
	
//	echo $_POST["lang"];
	if($_POST["lang"]=='ar')
	{
		include("arabic.php");
	}
	else
	{
		//echo $_POST["lang"];
		include("english.php");
	}

	//echo $arr["direc"] ."<br>";
	echo "<body style='text-align: $arr[direc]' > <form> $arr[un] <input type='text' name='un' > <br>
														$arr[pass] <input type='password' name='pas' > <br>
												 <input type='submit' value='$arr[log]' >
												</form> </body>" ;

?>