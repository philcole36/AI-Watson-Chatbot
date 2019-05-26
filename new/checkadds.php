<?php
    session_start();    //starts a new session or continues one that already exists
    ob_start();
    if(isset($_POST['add'])){

                foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }
  
        echo "$Topic";
        echo "$Theory";
         $Name= $_GET['id'];

                 $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
                    if($con)
                    {
            

                       
                        $query1= "INSERT INTO $Name(`Id`, `Topic`, `Theory`, `Question`, `Code`, `Answer`) VALUES ('$ID', '$Topic', '$Theory', '$Question ', '$Code', '$Answer')";

                           $runqry4 = mysqli_query($con, $query1) or die("</br></br>Could not insert past papers.");
                        

                        

                        //close the connection
                        mysqli_close($con);
                              header("Location:pastpaper2.php?id=".$Name);

                       
                        
                    
                    
    
                    }
                    
                
                }