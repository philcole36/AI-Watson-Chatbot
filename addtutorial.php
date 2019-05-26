<?php

	session_start();


	


	
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
    $ID= "";
    $Topic= "";
    $Theory= "";
     $Question = "";
     $Code=  "";
       $Answer= "";
     $trn="";
     $title ="";
     $Name=""; 
     $year="";
     $description="";
     $q=  $_SESSION['w'] ;
	  $_SESSION['w'] = $_SESSION['w'] ;

?>

		<html>
		<head>
			<title>Health</title>
		</head>
		<style>
	
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
					
		}

table {
  border-collapse: collapse;
    border-radius: 5px;

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
	</style>
		<body>

		<div id='container'>


			
				<table >
					<tr>
						<td><h1 style = 'color: black;'>Add Tutorial</td>
					</tr>
							 	   <tr>
				<td><label> ID</label></td>
				    <td><label>Topic</label></td>
               	<td><label>Theory</label></td>
               <td><label>Question</label></td>
               <td><label> Code</label></td>
                 <td><label> Answer</label></td>
            
            </tr>

		<form action = 'checktutorial.php?id=<?php echo    
							$ID;?>' method = 'post'>
       <?php echo"
       <tr>

             <td><textarea  name = 'ID' placeholder ='ID'  value = '$ID' />  </textarea></td>
               <td><textarea  name = 'Topic' placeholder ='Topic'  value = '$Topic' />    </textarea></td>
                 <td><textarea  name = 'Theory' placeholder ='Theory'  value = '$Theory' />     </textarea></td>
                   <td><textarea  name = 'Question' placeholder ='Question'  value = '$Question' />   </textarea></td>
                     <td><textarea  name = 'Code' placeholder ='Code'  value = '$Code' />    </textarea></td>
                      <td><textarea  name = 'Answer' placeholder ='Answer'  value = '$Answer' /> </textarea></td>
</tr>
		</tr>
						



               
                     	";?>
						<td>	<input type = 'submit' value ='Add' name ='add'/> </td>

						</form>


            </tr>

				 	
							  
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