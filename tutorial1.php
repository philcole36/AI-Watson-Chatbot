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
     $name = $_GET['id'];
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
			body{

			}

  table, td, th {  
  border: 1px solid black;
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
   
  padding: 20px;
 
  top: 50%;
  left: 50%;

  max-width: 1400px;
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

  top: 100%;
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

		<div id='container'>


			
				<table >
					<tr>
						<td><h1 style = 'color: black;'>All Tutorial Questions</td>
								
										  <?php
										  echo '<td><a class="f" href="addpastquestion.php?name1=' .$name.'">Add</a></td>';
						
							?>
					</tr>
							 	   <tr>
				<td><label> ID</label></td>
				    <td><label>Topic</label></td>
               	<td><label>Theory </label></td>
               <td><label>Question</label></td>
               	<td><label>Code </label></td>
               <td><label>Answer</label></td>
             

            </tr>
            		
            
            
            <?php
    $con = mysqli_connect('localhost','root','','id9534037_major_') or die("<h1>Could not connect to database.</h1>");
        				$query = "SELECT * FROM ".$_GET['id']." "; //check if the entered email and password matches any row stored in the database
						$result = mysqli_query($con, $query) or die ("<h2>Could not RETRIEVE data</h2>");
						
						?>
				 <?php while($row = mysqli_fetch_array($result)):;?>

		

        <?php
		
            				echo "<tr>";

							echo "<td>". $row['Id']."</td>";
							echo "<td>" . $row['Topic']."</td>";
							echo "<td>" . $row['Theory']."</td>";
							echo "<td>" . $row['Question']."</td>";
								echo "<td>" . $row['Code']."</td>";
									echo "<td>" . $row['Answer']."</td>";
						
					

											
							?>

	

										
										  <?php
										  echo '<td><a class="f" href="pastpaperverify.php?id=' . $row['Id'] .'& name1=' .$name.'">Select</a></td>';
									


										
							
							echo "</tr>";

					
							?>
               

          		

            </tr>

						

				 	
							   <?php endwhile;
						mysqli_free_result($result);
						mysqli_close($con);
						?>
							

							   	</form>


						<form action = 'mainmain.php' method = 'post'>
								<input type = 'submit' value =  'Home' name = 'cancel'/>
							</form>

							<form action = 'maintutorial.php' method = 'post'>
								<input type = 'submit' value =  'Go Back' name = 'cancel'/>
							</form>
						</td>
						
					</tr>

				</table>
						</div>

	
				
	</body>
	</html>