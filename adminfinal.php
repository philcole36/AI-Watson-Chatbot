<?php
ob_start();
	session_start();	//starts a new session or continues one that already exists
	    
	if(isset($_POST['new']))//check if button was pressed
	{
		foreach($_POST as $key => $value) //assigning values from form to local variables
		{
			$$key = $value;
		}

 $id =$_GET['id'];
 $name =  $_SESSION['w'] ;

    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $name WHERE Id = '".$_GET['id']."'"; //check if the entered email and password matches any row stored in the database

            $sql = "UPDATE $name SET ID='$ID', Topic='$Topic', Theory='$Theory',Question='$Question', Answer='$Answer', Code='$Code' WHERE ID= '".$_GET['id']."'" ;


           
            $runqry2 = mysqli_query($con, $sql);

        
            mysqli_close($con);


              //connect to database
    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $name WHERE Id = '".$_GET['id']."'"; //check if the entered email and password matches any row stored in the database
        
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
                $_SESSION['w'] = $w;

                
                               header("Location:pastpaper2.php?id=".$name);
            }
        }      
       
                }

		


        if(isset($_POST['delete']))//check if button was pressed
    {
        foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }

$id =$_GET['id'];
 $name =  $_SESSION['w'] ;
 echo"$name";
 echo "$id";


    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        


        $sql = "DELETE FROM $name WHERE Id = '".$_GET['id']."'"; //check if the entered email and password matches any row stored in the database                               

        
            $runqry2 = mysqli_query($con, $sql) or die( "Unable to delete account details ... \n" . mysqli_error());

        
            mysqli_close($con);


             //connect to database
    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $name" ;

        
        //echo $query;
        
        $result = mysqli_query($con, $query);   //run query
        
        $numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
        
      header("Location:pastpaper2.php?id=".$name);
               
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
                $_SESSION['w'] = $w;

                
                             

            }
        }      
                    
       
                }







if(isset($_GET['Name']))
    {
        foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }

$Name =$_GET['Name'];


    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        


        $sql = "DROP TABLE $Name"; //check if the entered email and password matches any row stored in the database                               
   $sql2 = "DELETE FROM allpapers WHERE Id = '".$_GET['Name']."'"; //check if the entered email and password matches any row stored in the database   
        
            $runqry2 = mysqli_query($con, $sql) or die( "Unable to delete account details ... \n" . mysqli_error());
            $runqry3 = mysqli_query($con, $sql2) or die( "Unable to delete account details ... \n" . mysqli_error());

        
            mysqli_close($con);


         header("Location:mainadmin.php");
        
        
       
                }

        



if(isset($_GET['Name_t']))
    {
        foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }

$Name_t =$_GET['Name_t'];


    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        


        $sql = "DROP TABLE $Name_t"; //check if the entered email and password matches any row stored in the database                               
   $sql2 = "DELETE FROM tutorial WHERE 	title = '".$_GET['Name_t']."'"; //check if the entered email and password matches any row stored in the database   
        
            $runqry2 = mysqli_query($con, $sql) or die( "Unable to delete account details ... \n" . mysqli_error());
            $runqry3 = mysqli_query($con, $sql2) or die( "Unable to delete account details ... \n" . mysqli_error());

        
            mysqli_close($con);


         header("Location:maintutorial.php");
        
        
       
                }
	
?>