<?php
	session_start();	//starts a new session or continues one that already exists
    if (isset($_POST['add'])) {
ob_start();
                foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }
  
      echo"$Name";
   
      
      $allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file1"]["name"]);
$extension = end($temp);
$upload_pdf1=$_FILES["pdf_file1"]["name"];
move_uploaded_file($_FILES["pdf_file1"]["tmp_name"],"pdf/" . $_FILES["pdf_file1"]["name"]);


    $allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file2"]["name"]);
$extension = end($temp);
$upload_pdf2=$_FILES["pdf_file2"]["name"];
move_uploaded_file($_FILES["pdf_file2"]["tmp_name"],"pdf/" . $_FILES["pdf_file2"]["name"]);


    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
                    if($con)
                    {
                    
                   $sql = "  CREATE TABLE $Name (
                  `Id` int NOT NULL AUTO_INCREMENT,
                  `Topic` varchar(4000) NOT NULL,
                  `Theory` varchar(4000) NOT NULL,
                  `Question` varchar(4000) NOT NULL,
                  `Code` varchar(4000) NOT NULL,
                  `Answer` varchar(4000) NOT NULL,
                  PRIMARY KEY (`Id`)
                )";
 echo"$upload_pdf1";
                        $runqry1 = mysqli_query($con, $sql) or die("</br></br>Could not create table.");
                      
                        
                        $query2= "INSERT INTO tutorial (`description`, `title`, `Id`, `tutorial`, `lecture`, `fk`) VALUES ('$description','$Name',NULL, '$upload_pdf1','$upload_pdf2','$Name')";

                        
                        //run the query
                    
                          $runqry3 = mysqli_query($con, $query2) or die("</br></br>Could not insert all papers.");

                        //close the connection
                        mysqli_close($con);
                        
                     header('Location: maintutorial.php');
                        
                    
                    
    
                    }
               
                
                }