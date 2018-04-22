<html>
<head>
        <link rel="stylesheet" href="home.css">
        <title>Introduction to Database</title>
                        <nav id="navigation bar">
                        <ul>
                                <li><a href="home.html">Home</a></li>
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
<?php
include("session.php");
$sql = "SELECT * FROM marks";
$result = mysqli_query($db,$sql);
        if($result->num_rows > 0){
        echo "<table><tr><th>ID</th><th>Q1</th><th>Q2</th><th>Q3</th><th>A1</th><th>A2</th><th>A3</th><th>Midterm</th><th>Final</th> </tr>";
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["utorid"]. "</td><td>" . $row["Q1"]. "</td><td> " . $row["Q2"]. "</td><td>" . $row["Q3"]. "</td><td>" . $row["A1"]. "</td><td>" . $row["A2"]. "</td><td>" . $row["A3"]. "</td><td>" . $row["Midterm"]. "</td><td>" . $row["Final"]. "</td></tr>";}
        echo "</table>";
        }
        else{
        echo "0 Results";       }


?>

<div>
</body>
</html>


