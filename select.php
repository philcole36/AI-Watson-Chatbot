<?php
session_start();
//connect to database
$_SESSION['a']="";
$_SESSION['id']= "";
       $name = $_GET['name1'];
     
    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $name WHERE `Id` = '".$_GET['id']."'"; //check if the entered email and password matches any row stored in the database
        
        //echo $query;
        
        $result = mysqli_query($con, $query);   //run query
        
        $numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
        
      
        
        if($numrows == 1)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['task'] = $row['Question'];
                $_SESSION['code'] = $row['Code'];
                $_SESSION['info'] = $row['Topic'];
                 $_SESSION['theory'] = $row['Theory'];
                   $_SESSION['title'] = $row['Topic'];
                    $_SESSION['ans'] = $row['Answer'];
                    $_SESSION['id'] = $row['Id'];
                   $_SESSION['row']= $numrows;
                    $_SESSION['name']= $name;
                       header("Location:task.php");

            }
        }

        ?>