<?php
session_start();
	if(isset($_POST['login']))
	{
		foreach($_POST as $key => $value) //assigning values from form to local variables
		{
			$$key = $value;
		}
		
		$err = ""; //err variable in case there is wrong data input
		$errflag = false;
		
		
	
	
		
		foreach($_POST as $key => $value)
		{
			$_SESSION[$key] = $value;
		}
		
		if($username == "admin")
		{
		
				header("Location: mainmain.php");
			
		}
		else
		{		
			
				header('Location: main_page.php');
		};
	}
?>