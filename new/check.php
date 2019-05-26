<?php
session_start();
 ob_start();
    if(isset($_POST['Run']))
    {
  $www = $_GET['e'];
  $_SESSION['a']="";
$Message="";
$correct ="";
 $ans = $_SESSION['ans'];
 $code = $_SESSION['code'];
   $_SESSION['answer']="";
        foreach($_POST as $key => $value) //assigning values from form to local variables
        {
            $$key = $value;
        }

 


                   //store values in sessions from post
        foreach($_POST as $key => $value)
        {
            $_SESSION[$key] = $value;
        }




 
    

    if($www == "4"){
      $_SESSION['a'] = $_SESSION['ans'];
     
       header("Location: task.php");
    }

        
        $stripped = str_replace(' ', '', $code1);
        $stripped1 = str_replace(' ', '', $ans);
        if( $stripped1  ==   $stripped)
        {       
        
         $_SESSION['correct'] = "true";
          $_SESSION['right'] = $_SESSION['right']  + 1;
        $Message =" Answer is Correct";
         header("Location: task.php?Message=" . urlencode($Message));

        }
        else
        {  
         
        $_SESSION['correct'] = "false";
      $Message ="Answer is Incorrect";
           header("Location: task.php?Message=" . urlencode($Message));
        }
    }
?>
