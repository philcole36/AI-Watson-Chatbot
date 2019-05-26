<?php
ob_start();
	session_start();	//starts a new session or continues one that already exists
   
	
	if(isset($_GET['id']))
	{
		foreach($_POST as $key => $value) //assigning values from form to local variables
		{
			$$key = $value;
		}

        $w = $_GET['name1'];

        echo "$w";


             //connect to database
                        $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $w WHERE Id = '".$_GET['id']."'"; //check if the entered email and password matches any row stored in the database
        
        //echo $query;
        
        $result = mysqli_query($con, $query);   //run query
        
        $numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
        
     
        
        if($numrows == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Topic'] = $row['Topic'];
                $_SESSION['Theory'] = $row['Theory'];
                 $_SESSION['Question'] = $row['Question'];
                $_SESSION['Code']= $row['Code'];
                $_SESSION['Answer']= $row['Answer'];
                $_SESSION['w'] = $_GET['name1'];
                
                 header('Location:pastpaper3.php');

            }
        }
       
       
                }
?>