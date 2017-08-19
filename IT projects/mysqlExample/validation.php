<?PHP
  // form handler
  $errorMsg_mail = '';
  $errorMsg_name = '';
  
  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];

	if (empty($_POST["name"])) 
    {
     $errorMsg_name = "Please enter your Name";
    }
	if(empty($_POST["email"]) || !preg_match("/^\S+@\S+$/", $email)) 
	{
      $errorMsg_mail = "Please enter a valid Email address";
	}
    
	if ( $errorMsg_mail == '' && $errorMsg_name == '') 
	{
	  header("Location: second.php");
      exit;
	}
}
?>

<!--html starts here-->
<!DOCTYPE HTML> 
<html>
	
	<body>

		<?php

			//Any error messages to display?

			if ( $errorMsg_name != '' ) 
			{

				print "<p>$errorMsg_name</p>";

			}

			if ( $errorMsg_mail != '' ) 
			{

				print "<p>$errorMsg_mail</p>";

			}

	   ?>
			<form method="post" action="validation.php"> 
				<h2>Form</h2>	
				<br>
				<hr/>
				<br>
				Name:<br><input type="text" name="name">
				
				<br>
		 
				E-mail:<br><input  type="text" name="email">

				<input type="submit" name="submit" value="Submit"> 
			</form>
		
</html>
<!--html ends here-->