<?php

	session_start();


	
		if(isset($_SESSION['delete']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['delete']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}
	

	
	if(isset($_SESSION['new']))
	{
		//unset the pbtn value so that the data is only preserved if the button is pressed
			unset($_SESSION['new']);
		
		foreach($_SESSION as $key => $value)
		{
			$$key = $value;
		}
		
		
	}

    //unset the pbtn value so that the data is only preserved if the button is pressed
  
    //convert session key-value pair to local variables
    $ID= $_SESSION['Id'];
    $Topic=   $_SESSION['Topic'];
    $Theory= $_SESSION['Theory'] ;
     $Question =$_SESSION['Question'] ;
     $Code=  $_SESSION['Code'];
       $Answer=  $_SESSION['Answer'];
     $trn="";
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
  
      background-size: 110%;
      color: black;
    }

table {
  border-collapse: collapse;
    border-radius: 5px;
  
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
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
						<td><h1 style = 'color: black;'>Info</td>
					</tr>
							 	   <tr>
				<td><label> ID</label></td>
				    <td><label>Topic</label></td>
               	<td><label>Theory</label></td>
               <td><label>Question</label></td>
               <td><label> Code</label></td>
                 <td><label> Answer</label></td>
            
            </tr>

		<form action = 'adminfinal.php?id=<?php echo    
							$ID;?>' method = 'post'>
       <?php echo"

             <td><textarea  name = 'ID' placeholder ='ID'  value = '$ID' />$ID  </textarea></td>
               <td><textarea  name = 'Topic' placeholder ='Topic'  value = '$Topic' />$Topic </textarea></td>
                 <td><textarea  name = 'Theory' placeholder ='Theory'  value = '$Theory' />$Theory </textarea></td>
                   <td><textarea  name = 'Question' placeholder ='Question'  value = '$Question' /> $Question </textarea></td>
                     <td><textarea  name = 'Code' placeholder ='Code'  value = '$Code' /> $Code </textarea></td>
                      <td><textarea  name = 'Answer' placeholder ='Answer'  value = '$Answer' />$Answer  </textarea></td>

               
                     	";?>
						<td>	<input type = 'submit' value ='Update' name ='new'/> </td>

						<td>	<input type = 'submit' value ='Delete' name ='delete'/> </td>
						</form>


            </tr>

				 	
							  
							<form action = 'mainmain.php' method = 'post'>
								<input type = 'submit' value =  'Home' name = 'cancel'/>
							</form>

							<form action = 'mainmain.php' method = 'post'>
								<input type = 'submit' value =  'Go Back' name = 'cancel'/>
							</form>
						</td>
					
					</tr>

				</table>
						</div>

				
	</body>
	</html>