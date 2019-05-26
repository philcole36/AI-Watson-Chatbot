<?php
//1507121
  session_start();


  
  if(isset($_SESSION['submit']))
  {
    foreach($_POST as $key => $value)
    {
      $_SESSION['post'][$key] = $value;
    }



    //unset the pbtn value so that the data is only preserved if the button is pressed
    unset($_SESSION['submit']);
    //convert session key-value pair to local variables
    foreach($_SESSION as $key => $value)
    {
      $$key = $value;
    }
}
  
  else
  {
 
 
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Watson AI</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<style>
	body{
		 background-image : url('images1/.png');
			background-size: 100%;
	}
</style>
</head>
<body>

<div class="s" >
	<!-- Home -->



	</div>
	<br>
	<br>
	<br>
	<br>
	<!-- Info Boxes -->
	<!-- Header -->

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
						<div class="header_nav_container" style="background-color: #0e034d;     border-bottom: solid 5px #ffd403;">

							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index.php">Log Out</a></li>
												
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

	<div class="info" style=" background-image : url('images1/.png');
			background-size: 100%;">

		<div class="container" style=" background-image : url('images1/.png');

			background-size: 100%;">
			<br>
			<br>

			<div class="row row-eq-height">

				<!-- Info Box -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images1/info_1.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">Syallabus tutorial</div>
							
						</div>
							<div class="button home_button" style=" background-color: #0e034d; width: 100%;"><a href="bb.php"><span>Select</span><span>Select </span></a></div>

					</div>
				</div>

				<!-- Info Box -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="images1/info_2.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">Watson AI</div>
							
						</div>
			  				<div class="button home_button " style=" background-color: #0e034d; width: 100%;"><a href="https://assistant-chat-us-south.watsonplatform.net/web/public/695bdfe5-9b95-4bd1-9aaa-37cadbcb1c32"><span>Select</span><span>Select</span></a></div>

					</div>
				</div>

		
				<!-- Info Box -->
				<div class="col-lg-4 info_box_col" style="display: inline-block">
					<div class="info_box">
						<div class="info_image"><img src="images1/hcapped.jpg" alt=""></div>
						<div class="info_content">
							<div class="info_title">Exam Past Paper Tutorial</div>
							
						</div>
						
					<div  class="button home_button" style=" background-color: #0e034d; width: 100%;"><a href="Ques_all_ppapers.php"><span>Select</span><span>Select</span></a></div>
 				
					</div>
				</div> 	 


			</div>
		</div>
	</div>

		
		

</body>
</html>