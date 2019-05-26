<?php

  session_start();

   $_SESSION['right'] = 0;
   $name = $_GET['id'];
  if(isset($_SESSION['new1']))
  {
    //unset the pbtn value so that the data is only preserved if the button is pressed
      unset($_SESSION['new1']);
    
    foreach($_SESSION as $key => $value)
    {
      $$key = $value;
    }
    
    
  }else{


  }

 // do nothing   
?>

    <html>
    <html>
    <head>
<title>watson</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
    </head>
    <style>
  
  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

input[type=submit] {
    background-color: #0e034d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;


}




  body{
  
      background-size: 110%;
      color: black;
    }

table {
  border-collapse: collapse;
    border-radius: 5px;
 margin-top:10%;
  padding: 30px;

  top: 50%;
  left: 50%;

  max-width: 1500px;
width: auto;
height: auto;
}

th, td {
  padding: 15px;
    width: 700px;
    max-width: 700px; /* add this */
    white-space: wrap;
    overflow: hidden;
}


      input[type=reset], button, input[type=button]
     {
       
       border: none;
       padding: 7px;
       color: white;
       font-weight: bolder;
     }

    .container1 {
  border-radius: 5px;

  padding: 20px;

  top: 500%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
width: auto;
height: auto;
position: absolute;
}
.f{
    background-color: #0e034d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;

}
  </style>
    <body>
  <header class="header" id="header">
      <div>
        <div class="header_top">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                  <div class="logo">
                    <a href="#">Watson AI Tutor <span>+</span></a>  
                  </div>
                  <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
          <div class="header_nav_inner">
            <div class="header_nav_container" style="background-color: #0e034d; color:white;    border-bottom: solid 5px #ffd403;">

              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                      <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-center justify-content-start" style="padding-top: 30px;">
                          <li><a href="main_page.php">Home</a></li>
                          <li><a href="about.html">Log In</a></li>
                        </ul>
                      </nav>
                      <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                      </div>
                    </div>
              
                </div>
              </div>
            </div>
              </div>
          </div>
        </div>  
      </div>
    </header>


    <div id='container1'>


      
        <table >
       
            
                   <tr>
        <td><label><h2> Questions</h2></label></td>
        
             

            </tr>
            <?php


    //connect to database
         $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        
        $query = "SELECT * FROM $name"; //check if the entered email and password matches any row stored in the database
        
        //echo $query;
        
        $result = mysqli_query($con, $query);   //run query
      
            
            ?>
         <?php while($row = mysqli_fetch_array($result)):;?>

    

        <?php
    
                

  

                      
              ?>

  

                    
                      <?php
                      echo "<td>" . $row['Id']."</td>";
                      echo "<td>" . $row['Question']."</td>";
                    
                   echo '<td><a class="f" href="select.php?id=' . $row['Id'] .'& name1=' .$name.'">Select</a></td>';


                    
              
              echo "</tr>";

          
              ?>
               

              

            </tr>

            

          
                 <?php endwhile;
            mysqli_free_result($result);
            mysqli_close($con);
            ?>
              

                  </form>

              <form action = 'Edit Profile.php' method = 'post'>
                <input type = 'submit' value =  'Cancel' name = 'cancel'/>
              </form>
            </td>
            <td>
        
            </td>
          </tr>

        </table>
            </div>

  
        
  </body>
  </html>