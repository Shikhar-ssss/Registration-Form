
<?php
  //processing email address of user 
  
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
	  $emailadd = $_POST['emailadd'];
	  
	  if (!empty($emailadd))
	  {
		  include('connection.php');
		  mysqli_query($dbc, "INSERT INTO emailaddress(emails) VALUES('$emailadd')");
		  include('thank.html');
		  header('refresh:3,"shikhar.html"');
		  
	  }
	   else
      {
	       include('noemail.html');
		   header('refresh:3,"shikhar.html"');
      }
 }
  
  else
  {
	 echo"Error";
  }
?>
