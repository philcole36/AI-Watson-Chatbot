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

		if(isset($_SESSION['add']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['add']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

    //unset the pbtn value so that the data is only preserved if the button is pressed
  
    //convert session key-value pair to local variables

	

 // do nothing   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Health</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
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
  margin-top: -140px;


}




  body{
  
      background-size: 110%;
      color: black;
    }

table {
	border-collapse: none;
     border-radius: 5px;
border-width: :15px;
  padding: 20px;
  position: fixed;
  top: 70%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
width: 900px;
height: 550px;
}

th, td {
  padding: 15px;

  padding: 15px;
    width: 700px;
    max-width: 700px; /* add this */
    white-space: wrap;
    overflow: hidden;
    border: none;
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
  margin-left: 40%;
  font-size: 15px;

}
	</style>
		<body>

		


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
													<li><a href="mainmain.php">Home</a></li>
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
			<div id='container'> 
				<table >
					<tr>
						<h1 style = 'color: black; margin-left: 42%; margin-top: 150px; font-size: 40px;'>All Selections</h1>
								
					</tr>
							 	  
				<td><label style="margin-left: 30%;   font-size: 25px;"> Syallbus Tutorial </label></td>
					<td><label style="margin-left: 35%; font-size: 25px;"> Past Paper</label></td>
				 
             

            </tr>
            		
            
           

	

										
										  <?php
										  echo '<td><a class="f" href="maintutorial.php?">Select</a></td>';
										  echo '<td><a class="f" href="mainadmin.php?">Select</a></td>';
									


										
							
							echo "</tr>";

					
							?>
               

        
							

							   	</form>


						</td>
						<td>
						
						</td>
					</tr>

				</table>
						</div>

	
				
	</body>
	</html>