<?php
   include("config.php");
   session_start();
	$newtitle = "";
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$newuser = mysqli_real_escape_string($db,strtolower($_POST['newusername']));
	$newutorid = mysqli_real_escape_string($db,strtolower($_POST['utorid']));
	$newpass = mysqli_real_escape_string($db,($_POST['newpassword']));
	$newfirstname = mysqli_real_escape_string($db,strtolower($_POST['name']));
	$newlastname = mysqli_real_escape_string($db,strtolower($_POST['lastname']));
	$newtitle = mysqli_real_escape_string($db,$_POST['user-type']);
	$newtitle = 'Student';
	$sql = "SELECT username FROM admin WHERE username = '$newuser'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
            
            if($count == 1) {
               $error2 = "This username already exist";
		}
	else {
               $sql1 = "INSERT INTO admin VALUES ('$newutorid', '$newuser', '$newpass')";
	       $sql2 = "INSERT INTO userinfo VALUES('$newutorid', '$newfirstname','$newlastname','$newtitle')";
               if (mysqli_query($db,$sql1) === TRUE)
		{ if(mysqli_query($db,$sql2 === TRUE)) {
                 
                header("Location: login.php");
               } else {
                  $error2 = "Error: " . mysqli_error($db);
}
}
}
}
?>
<html>
<head>
	<title>Welcome to Introduction to Database Login Page</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
	<img src="user.png">
	<form action = "" method = "post">
		<div class="form-input">
			<input name="utorid" type="text" placeholer="Utorid">
		</div>
		<div class="form-input">
			<input name="newusername" type="text" placeholder="Username">
		</div>	
		<div class="form-input">
			<input type="text" name="newpassword" placeholder="Password">
		</div>			
		<div class="form-input">
			<input id="name" type="text" name="name"
			placeholder = "Enter your name">
		</div>
		<div class="form-input">
			<input id="lastname" type="text" name="lastname"
			placeholder="Enter your Last name">
		</div>
					    <select id="user-type" name="user-type">
						    <option value="student">Student</option>
						    <option value="ta">TA</option>
						    <option value="instructor">Instructor</option>
					    </select>		
		<input type="submit" onclick="getnewuserInfo()" name="submit" value="SIGN UP" class="btn-login">	
		<br>
		<a href="index.php">Log In</a>
		<?php echo $newutorid; echo $error2; ?>
	</form>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js">
	</script>
	<script>
	
</div>
</body>
</html>
