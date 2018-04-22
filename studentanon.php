<?php
   include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $instructor = mysqli_real_escape_string($db,$_POST['instSelect']);
      $Q1 = mysqli_real_escape_string($db,$_POST['q1']);
      $Q2 = mysqli_real_escape_string($db,$_POST['q2']);
      $Q3 = mysqli_real_escape_string($db,$_POST['q3']);
      $Q4 = mysqli_real_escape_string($db,$_POST['q4']);
      $sql = "INSERT INTO AnonFeedback VALUES('$instructor','$Q1','$Q2','$Q3','$Q4')";
      $result = mysqli_query($db,$sql);
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

	
<div id = "AnonFeedback">
        <form action"" method = "post">
        <select id="instSelect " name="instSelect">
                <option value="inst1">inst1</option>
                <option value="inst2">inst2</option>
         </select>
        <h2>What do you like about the instructor's teaching?</h3><br/>
   
        <input type = "text" name = "q1">

        <h2>What do you recommend the instructor to do to improve their teaching?</h3>
        <br/>
        <input type = "text" name = "q2">
        <h2>What do you like about the labs?</h3>
        <br/>
        <input type = "text" name = "q3">
        <h2>What do you recommend the lab instructor to do to improve their teaching?</h3>
        <br/>
        <input type = "text" name = "q4">
        <input type = "submit" name = "submitfeedback" value = "SUBMIT">
        </form>
</div>
</div>
</body>
</html>
