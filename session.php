<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db," select admin.utorid, firstname, type from userinfo,admin where admin.utorid = userinfo.utorid and username = '$user_check'; ");
   //$ses_sql = mysqli_query($db,"SELECT admin.utorid,type,firstname FROM userinfo,admin WHERE userinfo.utorid =  admin.utorid and admin.utorid = '$user_check' )"); 
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['utorid'];

   $login_type = $row['type'];
   $login_name = $row['firstname'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>

