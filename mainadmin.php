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


if(isset($_SESSION['Delete']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['Delete']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
		
		
		
	}

    //unset the pbtn value so that the data is only preserved if the button is pressed
  
    //convert session key-value pair to local variables

	

 // do nothing   
?>

		<html>
		<head>
			<title>Watson</title>
			<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
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
  padding: 14px;
  margin: 8px 0;
  border: none;


}
	body{
			
		}

table {
  border-collapse: collapse;
    border-radius: 5px;
 margin-top:15%;
  padding: 30px;
margin-left:5%;
background-color: #f2f2f2;
  top: 50%;
  left: 50%;
  color:black;

  max-width: 1500px;
width: auto;
height: auto;
}

th, td {
  padding: 15px;
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

  top: 50%;
  left: 50%;
  /* bring your own prefixes */
 
width: 500px;
height: 450px;
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
		    <br>
		    <br>
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

		<div id='container1'>

 
			
				<table >
					<tr>
						<td><h1 style = 'color: black;'>All Past Papers</td>
								  <?php
										  echo '<td><a class="f" href="addppaper.php">ADD</a></td>';
										  ?>
					</tr>
							 	   <tr>
				<td><label> ID</label></td>
				    <td><label>Year</label></td>
               	<td><label>Title </label></td>
               <td><label>Description</label></td>
             

            </tr>
            		
            
            
            <?php
    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
						$query = "SELECT * FROM allpapers";
						$result = mysqli_query($con, $query) or die ("<h2>Could not RETRIEVE data</h2>");
						
						?>
				 <?php while($row = mysqli_fetch_array($result)):;?>

		

        <?php
		
            				echo "<tr>";

							echo "<td>". $row['ID']."</td>";
							echo "<td>" . $row['Year']."</td>";
							echo "<td>" . $row['Description']."</td>";
							echo "<td>" . $row['Title']."</td>";
						
						

											
							?>

	

											
										  <?php
										  echo '<td><a class="f" href="pastpaper2.php?id=' . $row['ID'] . '">Select</a></td>';
										  echo '<td><a class="f" href="adminfinal.php?Name=' . $row['ID'] . '">Delete</a></td>';
										  
									
                                     
                                            	?>
                                        
										    
									


										
							
						

					
						
               

          		

            </tr>

						

				 	
							   <?php endwhile;
						mysqli_free_result($result);
						mysqli_close($con);
						?>
							

				
						</td>
					
					</tr>

				</table>
						</div>

	
				
	</body>
	</html>