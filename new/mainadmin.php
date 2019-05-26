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

		<html>
		<head>
			<title>Health</title>
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
			
		}

table {
  border-collapse: collapse;
    border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
width: 900px;
height: 450px;
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

		.container {
  border-radius: 5px;

  padding: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
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

		<div id='container'>


			
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
       				    $con = mysqli_connect('localhost','id9534037_kris','admin','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
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
									


										
							
							echo "</tr>";

					
							?>
               

          		

            </tr>

						

				 	
							   <?php endwhile;
						mysqli_free_result($result);
						mysqli_close($con);
						?>
							

							   	</form>
							   		<form action = 'mainmain.php' method = 'post'>
								<input type = 'submit' value =  'Go Back' name = 'cancel'/>
							</form>


							<form action = 'index.php' method = 'post'>
								<input type = 'submit' value =  'Log Out' name = 'cancel'/>
							</form>
						</td>
						<td>
						
						</td>
					</tr>

				</table>
						</div>

	
				
	</body>
	</html>