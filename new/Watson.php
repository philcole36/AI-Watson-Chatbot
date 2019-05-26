

<?php

  session_start();

  
  	$id =$_SESSION['id'];
  	$n= $id + 1;
  	$p= $id - 1;
    

  if(isset($_SESSION['Check']))
  {
    //unset the pbtn value so that the data is only preserved if the button is pressed
      unset($_SESSION['Check']);
    
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
  	$correct = $_SESSION['correct'];

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
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/contact.css">


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
body{
  background-image : url('images1/ai.jpg');
      background-size: 100%;
}
    </style>
  </head>
  <body>
<div style=" padding-top: 200px; top: 50%; left: 30%;width:100%; margin: 30px; height: auto;"class="c">

        <!-- Make an Appointment -->
        <div class="col-lg-5 ">
          <div class="info_form_container">
            <div class="info_form_title">Ask Watson</div>
            <form name="form" action="" class="info_form" id="info_form" method="get">
             <input type="text" name="question" class="info_input" id="question" value="">
                 <button type="submit" style="margin-bottom: 50px;"  class="info_form_button" id="test">Ask</button>
              </form>

              <?php 
ini_set("allow_url_fopen", 1);



if (!empty($_GET['question']))
{$questi = $_GET['question'];
$createurl = 'http://watsontutor.openode.io/create';
$messageurl = 'http://watsontutor.openode.io/message/'.$questi;
//echo $questi;
$json = file_get_contents($createurl);
$json = file_get_contents($messageurl);
$json = file_get_contents($messageurl);
$json = file_get_contents($messageurl);
$obj = json_decode($json);
foreach ($obj as $val)
{
    echo $val->text;
    echo " ";
}
}
?>
          </div>
        </div>
      
    </div>

  </body>








</html>