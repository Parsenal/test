
<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
	<style>
table, th, td {
    border: 1px solid black;
}
</style>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_name; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2> 
      <?php 
      if($login_type == 'Instructor'){
	    header("location: home.html");
	}
      if($login_type == 'Student'){
	header("location: studenthome.html");
	
	}
	
	if($login_type == 'TA'){
		header("location: tahome.html");
	}

	?>

   </body>
   
</html>
