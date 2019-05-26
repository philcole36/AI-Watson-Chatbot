<?php
	session_start();
	
	if(isset($_SESSION['login']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
		unset($_SESSION['login']);
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}
	else
	{
		// incase the page is refreshed, set some default values
		$username = "";
		$password = "";
		
		$err = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Watson  ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

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
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index.php">Home</a></li>
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

	
	

	<!-- Contact -->

		<div style=" padding-top: 200px; top: 50%; left: 30%;width:100%; margin: 30px; height: auto;"class="c">

				<!-- Make an Appointment -->
				<div class="col-lg-5 ">
					<div class="info_form_container">
						<div class="info_form_title">Log In</div>
						<form action = 'login_validate.php' class="info_form" id="info_form"  method= 'POST'>
							<input type="text" name="username" class="info_input" placeholder="Username" value = '<?php echo    
							$username; ?>'/>
							<input type="text" name="password" class="info_input" placeholder="Password" value = '<?php echo 
							$password; ?>' />

							<button style="margin-bottom: 40px;" class="info_form_button" value='Log In' name='login'>Log In</button>
							<br>
						</form>
					</div>
				</div>
			
		</div>
	
</div>

<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

</body>
</html>