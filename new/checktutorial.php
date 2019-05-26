<?php
	session_start();	//starts a new session or continues one that already exists
    if(isset($_POST['add'])){

                foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }
  
        echo "$Name";
        echo "$description";
        echo "$ID";

                   $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
                    if($con)
                    {
                    
                   $sql = "  CREATE TABLE $Name (
                  `Id` int(11) NOT NULL,
                  `Topic` varchar(5000) NOT NULL,
                  `Theory` varchar(5000) NOT NULL,
                  `Question` varchar(5000) NOT NULL,
                  `Code` varchar(5000) NOT NULL,
                  `Answer` varchar(5000) NOT NULL,
                  PRIMARY KEY (`Id`)
                )";

                        $runqry1 = mysqli_query($con, $sql) or die("</br></br>Could not create table.");
                        $query1= "INSERT INTO $Name(`Id`, `Topic`, `Theory`, `Question`, `Code`, `Answer`) VALUES ('$ID', '$Topic', '$Theory', '$Question ', '$Code', '$Answer')";

                           $runqry4 = mysqli_query($con, $query1) or die("</br></br>Could not insert tutorial papers.");
                        
                        $query2= "INSERT INTO alltutorial (`name`, `description`, `id`) VALUES ('$Name',  '$description', '$ID')";

                        
                        //run the query
                    
                          $runqry3 = mysqli_query($con, $query2) or die("</br></br>Could not insert all papers.");

                        //close the connection
                        mysqli_close($con);
                        
                        
                        
                    
                    
    
                    }
                    header('Location: mainmain.php');
                
                }