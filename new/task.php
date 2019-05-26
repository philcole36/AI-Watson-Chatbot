<?php

  session_start();

  
  	$id =$_SESSION['id'];
  	$n= $id + 1;
  	$p= $id - 1;
 $message = "wrong answer";
 $message1 = "Correct answer";

  if(isset($_SESSION['Run']))
  {
    //unset the pbtn value so that the data is only preserved if the button is pressed
      unset($_SESSION['Run']);
    
    foreach($_SESSION as $key => $value)
    {
      $$key = $value;
    }


  
    
  }else{

  	$task = $_SESSION['task'];
  	$info = $_SESSION['info'] ;
  	$code =   $_SESSION['code'];
  	$theory= $_SESSION['theory'];
  	$title=    $_SESSION['title'];
  	$code1="";
  	$answer = "";
  	$ans =    $_SESSION['ans'];
  	$right = $_SESSION['right'] ;
  	$correct = "";
  	$rows =  $_SESSION['row'];
    $name =  $_SESSION['name'];
    $a= $_SESSION['a'];
  }

 
  	

 // do nothing   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="cm/lib/codemirror.css">
      <script src="cm/mode/clike/clike.js"></script>
      <link rel="stylesheet" href="cm/theme/night.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
   
    <style>
    	.CodeMirror {
font-family: 'Nunito Sans', sans-serif; 
font-size: 16px;
}

span{
	height: 300px;
	width: 200px;
}

.p{
background-color: transparent; 
color: white;
 padding-left: 20px;
  padding-top: 10px;  
    border: 1px solid white; 
     height: 40px;
      width: 100px;
       margin-left: 504px; 
        position: absolute;
         bottom: 2%; 
         font-family: 'Nunito Sans', sans-serif;

}
.o{
     font-family: 'Nunito Sans', sans-serif;
      background-color:#ffc107; 
      color: white;
       border:none;
        width: 110px; 
        padding-left: 30px; 
        padding-top:5px;
         height: 40px; 
         margin-left: 900px; 
          position: absolute; 
          bottom: 2%;
}
 
    <style>
      .CodeMirror {
font-family: 'Nunito Sans', sans-serif; 
font-size: 16px;
}

span{
  height: 300px;
  width: 200px;
}

.p{
background-color: transparent; 
color: white;
 padding-left: 20px;
  padding-top: 10px;  
    border: 1px solid white; 
     height: 40px;
      width: 100px;
       margin-left: 504px; 
        position: absolute;
         bottom: 2%; 
         font-family: 'Nunito Sans', sans-serif;

}
.o{
     font-family: 'Nunito Sans', sans-serif;
      background-color:#ffc107; 
      color: white;
       border:none;
        width: 110px; 
        padding-left: 30px; 
        padding-top:5px;
         height: 40px; 
         margin-left: 900px; 
          position: absolute; 
          bottom: 2%;
}

  table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
  background-color: #ffffff;
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
 
  padding: 20px;

  top: 50%;
  left: 50%;

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
  </head>
  <body>

  <div class="row">
    <div class="col-lg-12" style="background-color: #0a001f;  height: 60px; display: inline-block;" >

    	<<img src="img/a.jpg" alt="" style="width: 50px; height: 55px; float: left;">
    	<img src="img/angel.png" alt="" style="height: 60px; width: 70px; margin-left: 900px; margin-bottom: -20px;">
    	<a href="https://assistant-chat-us-south.watsonplatform.net/web/public/695bdfe5-9b95-4bd1-9aaa-37cadbcb1c32" style="color: white; border: 1px solid white; margin-top: 20px; height: 40px; width: 300px; padding-top: 10px; font-family: 'Nunito Sans', sans-serif;" >Ask Watson</a>
 
       <h6 style=" float:left; margin-top: -90px;   margin-top: 20px; margin-left: 15px; font-weight:400;"><a style="color: white; font-family: 'Nunito Sans', sans-serif;" href="main_page.php">PROGRAMMING TUTOR </a></h6>
      <h6 style="color: white; float:right; font-weight:400;margin-right: 650px; margin-top: -25px; font-family: 'Nunito Sans', sans-serif; font-size: 17.6px;" class=><?php echo $title?>  <a href="selecttask.php"> </a></h6>



    </div>
  </div>
  <div class="row">

    <div class="col-md-4" style="background-color: white; height: 590px; overflow:scroll;  width: 500px; max-width: 500px; white-space: wrap; ">

    	<div class="e" style="background-color: #ebebeb; height: 50px; width: 100%; padding-left: 20px; padding-top: 10px">
    
    	 <?php 
     				          $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");

     				        $query = "SELECT * FROM $name"; 

     				    $result = mysqli_query($con, $query);   //run query
        
        				$numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
        				$rows = $numrows;
        				 echo '<img src="img/g.jpg" height= 30px; width = 30px;border=0>'; 
        					echo "<p style='margin-left:70px; margin-top: -25px;'>TOTAL COMPLETED:  $right/$numrows</p>";
			
					?>
    		
    	</div>

          <div class="lc_task">
                  <h4 style="  margin-top: 30px; margin-bottom: 25px; margin-left: 20px; font-family: 'Nunito Sans', sans-serif; font-weight: 400;"> Instructions: </h4>
                  <ol id="" type="1" style=" font-family: 'Nunito Sans', sans-serif; font-size: 17.6px;">


                   <?php
           if($correct == "true"){
              echo '<img src="img/g.jpg" height= 30px; width = 30px;border=0>'; 
echo "<script type='text/javascript'>alert('$message1');</script>";
              
             }else{
                 
             if($a == ""){
                  if($code1 != ""){ 
echo "<script type='text/javascript'>alert('$message');</script>";
}
            echo '<img src="img/r.png" height= 30px; width = 30px;border=0>';
             }else{
              
            echo '<img src="img/r.png" height= 30px; width = 30px;border=0>';
             }

             }
             ?>
<?php echo  $task?>
                  </ol>
               </div>
               <hr class="z-depth-1">
                     
                  <h4 style=" background-color: #ebebeb; width: 120%; margin-top: 30px; margin-bottom: 25px; padding-left: 20px; font-family: 'Nunito Sans', sans-serif; font-weight: 400; height: 50px; padding-top: 10px;"> Theory: </h4>
            <div class="lc_theory" style="margin-left: 20px;">
                  <p style=" font-family: 'Nunito Sans', sans-serif; font-size: 17.6px; margin-left: 30px;    width: 400px; max-width: 400px; white-space: wrap; overflow: auto;"><?php echo $theory?></p>
               </div> 
    </div>
    <div class="col-md-4" style="height: 590px; background-color: #0a001f;">

            			<form action = 'check.php' method = 'post'>



            					 <?php
                       if($code1 == ""){
                echo"
                  <textarea id='editor'   name='code1' value='' style=' height:600px; width: 100%; background-color: #201e2f; border: none;' >  $code  </textarea>";
             }else{
             		echo "<textarea id='editor'   name='code1' value='' style=' height:600px; width: 100%; background-color: #201e2f; border: none;' >  $code1  </textarea>";
             }
             ?>

               

               					
								<input id="" class="" style=" background-color:#4b35ef; color: white; border:none; width: 20%; height: 40px; margin-left: -15px; margin-bottom: -12px; position: absolute; bottom: 2%;" type = 'submit' value =  'Run' name = 'Run' />




								
							</form>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
    </div>


    <div class="col-md-4" style="background-color: #111019; color: white;">



        
        
              <form action = 'check.php?e=4' method = 'post'>
           <input id="" class="" style=" background-color:#4b35ef; color: white; border:none; width: 20%; height: 40px; margin-left: 390px; margin-bottom: -12px; position: absolute; bottom: 2%;" type = 'submit' value =  'Answer' name = 'Run'>
              </form>
               
   <?php 
   if($a != "" ){
   		echo "<textarea    value='' style=' height:400px; width: 100%; color:white;  background-color:#111019; border: none;' >  $ans  </textarea>";
   }?>
								
      <?php echo $answer?>
    </div>
  




      <div class="col-lg-12" style="background-color: #0a001f; border-bottom: solid 5px #ffd403;  height: 55px;">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
  Select Question
</button>
          <?php
                      echo '<td><a class="o" href="select.php?id='.$n.'& name1='.$name.'">Next</a></td>';

          
              ?>

             <?php 
                       $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");

                    $query = "SELECT * FROM $name"; 

                $result = mysqli_query($con, $query);   //run query
        
                $numrows = mysqli_num_rows($result);    //checks number of rows returned (int)
                $rows = $numrows;
                  echo "<p style='font-size: 20px; color:white; margin-left: 720px; margin-top: -40px; padding-top: 15px;'>$id/$numrows</p>";
      
          ?>
          
                  <?php
                      echo '<td><a class="p" href="select.php?id='.$p.'& name1='.$name.'">Previous</a></td>';

          
              ?>

              
      		      	

    </div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="" >
  <div class="modal-dialog" role="document" style="background-color:none;">
    <div class="modal-content" style"background-color:none;">
 
      <div class="modal-body" style="width: 1000px; left: -430px; top:-40px;">
        <br>
          <br>

          <table >
        <tr>
            <td><h1 style = 'color: black;'>Questions</td>
          </tr>
      
            
            <?php


    //connect to database
         $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        $query = "SELECT * FROM $name "; //check if the entered email and password matches any row stored in the database
        
        //echo $query;
        
        $result = mysqli_query($con, $query);   //run query
      
            
            ?>
         <?php while($row = mysqli_fetch_array($result)):;?>

    

        <?php
                          
              ?>
                   
                      <?php
                             echo "<td>" . $row['Id']."</td>";
                      echo "<td>" . $row['Question']."</td>";
                       echo '<td><a class="f" href="ttselect.php?id=' . $row['Id'] .'& name1=' .$name.'">Select</a></td>';          
              ?>

            </tr>

            

          
                 <?php endwhile;
            mysqli_free_result($result);
            mysqli_close($con);
            ?>
          </table>
      </div>
   
    </div>
  </div>
</div>


      <script>
         var cmInstance = CodeMirror.fromTextArea(editor,
         	{
         		lineNumbers:true,
         		firstLineNumber: 1,
         		mode : "clike",
         		theme: "night",
         	}
         );
      </script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>








</html>