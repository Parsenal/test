<?php
include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $rutorid = mysqli_real_escape_string($db,$_POST['utorid']);
      $assignment = mysqli_real_escape_string($db,$_POST['markChange']);
      $newmark = mysqli_real_escape_string($db,$_POST['newmark']);
      $sql = "UPDATE marks SET marks.$assignment = '$newmark' WHERE utorid = '$rutorid'";
      $result = mysqli_query($db,$sql);
   }

?>

<html>
<head>
</head>
<body>

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


<div id="box">
<?php
$sql = "SELECT * FROM RemarkRequest";
$result = mysqli_query($db,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["utorid"]. " - On: " . $row["material"]. "- Past mark: " . $row["pastMark"]."- Explanation: " . $row["reason"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
</div>
<div id = "Remark">
        <form action"" method = "post">
        <input type="text" name="utorid" placeholder="Student's Utorid"/>
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
        <input type="int" name="newmark" placeholder="New Mark"/>
        <input type="submit" name="submit" value= "SUBMIT">
        </form>
</div>



</body>
</html>

