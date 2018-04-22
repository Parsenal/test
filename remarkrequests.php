<?php
include('session.php');
if (isset($_POST["markChange"]))
{ 
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	$utorid = $login_session;
      $koodoom = mysqli_real_escape_string($db,$_POST['markChange']);
      $nomre = mysqli_real_escape_string($db,$_POST['newmark']);
      $newmark = mysqli_real_escape_string($db,$_POST['reason']);
      $sql = "INSERT INTO RemarkRequest VALUES('$utorid','$koodoom','$nomre','$newmark)";
      $result = mysqli_query($db,$sql);
   }
}

?>




<html>
<head>
        <link rel="stylesheet" href="home.css">
        <title>Introduction to Database</title>
                        <nav id="navigation bar">
                        <ul>
                                <li><a href="studenthome.html">Home</a></li>
                                <li><a href="https://calendar.google.com/calendar?cid=OGkzaHRwdWRpYmtzdmtpbmxoMm44Y21xMG9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">Calendar</a></li>
                                <li><a href="lectures.html">Lectures</a></li>
                                <li><a href="assignments.html">Assignments</a></li>
                                <li><a href="http://piazza.com/utoronto.ca/winter2018/cscb20h3">Piazza</a></li>
                                <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
                                <li><a href="courseteam.html">Course Team</a></li>
                                <li><a href="syllabus.html">Syllabus</a></li>
                                <li><a href="labs.html">UTSC Labs</a></li>
                                <li><a href="logout.php">Log out</a></li>
                        </ul>
                        </nav>
                <header>
                        <h1><strong>CSCB20 - Introduction to Databases and Web Applications</strong></h1>
                </header>
</head>
<body>
<div id="box">
        <form action"" method = "post">
        <select id="markChange " name="markChange">
                <option value="Q1">Q1</option>
                <option value="Q2">Q2</option>
                <option value="Q3">Q3</option>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="A3">A3</option>
                <option value="Midterm">Midterm</option>
                <option value="Final">Final</option>
         </select>

        <input type="int" name="newmark" placeholder="old mark"/>
	<input type="text" name="reason" placeholder="reason"/>
        <input type="submit" name="submit" value= "SUBMIT">
        </form>
       
</div>
</body>
</html>
     
