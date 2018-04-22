<?php
   include("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT utorid FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername; 	
         header("location: welcome.php");
	
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
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
                        <input type="text" name="username"
                        placeholder = "Enter username">
                </div>
                <div class="form-input">
                        <input id="username" type="password" name="password"
                        placeholder="Enter Password">
                </div>
                <input type="submit" id="password" onclick="getInfo()" name="submit" value="LOGIN" class="btn-login">

                <div style = "font-size:25px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
                <br>
                <a href='registar.php'>Sign Up</a>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js">
        </script>
        <script>
                function getInfo(){
                        var username = document.getElementById("username")
                        var password = document.getElementById("password")                      
                }
        </script>
</div>
</body>
</html>

