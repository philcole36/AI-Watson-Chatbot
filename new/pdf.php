<?php 
  
// The location of the PDF file 
// on the server 

     $name = $_GET['id'];
$filename = "pdf/$name.pdf"; 
  
// Header content type 
header("Content-type: application/pdf"); 
  
header("Content-Length: ".filesize($filename)); 
  
// Send the file to the browser. 
readfile($filename); 
?>   