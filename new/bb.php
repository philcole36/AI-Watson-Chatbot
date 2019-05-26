

<?php

	session_start();

	
	    $Status= "";
    $TRN="";
    $T="";
        $Type= "";
    $Email= "";
    $Password= "";
     $StaffID ="" ;
     $Name= "";
	if(isset($_SESSION['new1']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['new1']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

	

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Watson</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css"><link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">

<style>
	.f{
    background-color: #0e034d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2px;

}
</style>
</head>
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
												<ul class="d-flex flex-row align-items-center justify-content-start" style="padding-top:30px;">
												  
													<li><a href="main_page.php">Home</a></li>
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
<br>
<br>
<br>
<br>
<br>
	<!-- Services -->
	  <?php
       				     $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        				$query = "SELECT * FROM tutorial "; 
						$result = mysqli_query($con, $query) or die ("<h2>Could not RETRIEVE data</h2>");
						
						?>
				 <?php while($row = mysqli_fetch_array($result)):;?>

		

     

	
               

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">

						<div class="section_subtitle" style="font-size: 30px; color: black;"><?php echo $row['title'] ?></div>
						<div class="section_title"><p style="font-size: 18px; color: black;"><?php echo  $row['description'] ?></p></div>
					</div>
				</div>
			</div>



			 

          		

     

						

				 	
							 
							
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto" style="background: #0e034d; border-bottom: solid 5px #ffd403;">
								<div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title"style="color:black;"> Lecture </div>
							<div class="service_text">
								<p>To learn and excel, reading plays a vital role in achieving any goal.</p>
								<br>
										  <?php
										  echo '<td><a class="f" href="pdf.php?id=' . $row['lecture'] .'" target=\"_BLANK\">Select</a></td>'

					
							?>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto"style="background: #0e034d;border-bottom: solid 5px #ffd403;">
								<div class="icon"><img src="images/icon_5.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title" style="color:black;">Tutorial PDF</div>
							<div class="service_text">
								<p>After all, practice makes perfect in almost everything humans do, and reading in no different</p>
								<br>
								  <?php
										  echo '<td><a class="f" href="pdf.php?id=' . $row['tutorial'] .'" target=\"_BLANK\">Select</a></td>'

					
							?>
							</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service text-center">
						<div class="service">
							<div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto" style="background: #0e034d; border-bottom: solid 5px #ffd403;">
								<div class="icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
							</div>
							<div class="service_title" style="color:black;">Online Tutor</div>
							<div class="service_text">
								<p>Online learning has to be the greatest revolution in contemporary education. Learn at your own pace.</p>
								<br>
								  <?php
										  echo '<td><a class="f" href="tutorialselect.php?id=' . $row['fk'] .'" >Select</a></td>'

					
							?>
							</div>
						</div>
					</div>
				</div>



	

			</div>
		</div>
	</div>




  <?php endwhile;
						mysqli_free_result($result);
						mysqli_close($con);
						?>

</body>
</html>