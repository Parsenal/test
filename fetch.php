<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "mirzaeim";
$password = "mirzaeim";
$dbname = "cscb20w18_mirzaeim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
$sql = "SELECT utorid, firstname,lastname FROM userinfo WHERE type = 'Student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["utorid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>