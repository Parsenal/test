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
$sql = "SELECT * FROM AnonFeedback WHERE instructor = '$login_session'";
$result = mysqli_query($db,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["instructor"]. " - Q1: " . $row["Q1"]. "- Q2: " . $row["Q2"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<div>
</body>
</html>

