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
      <title>Welcome inst </title>
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
            echo 'hi';
      $seegrade= "<form method=\"post\" action=\"fetch.php\">
                Get list of students<br>
        <input type=\"submit\" name=\"sButton\"><br>
        </form>";
        echo $seegrade;
        
	$seefeedback= "<form method=\"post\" action=\"instanon.php\">
		Get anonymous feedbacks<br>
	<input type=\"submit\" name=\"sButton\"><br>
	</form>";
	echo $seefeedback;
        $seeallmarks= "<form method=\"post\" action=\"allmarks.php\">
                See class marks<br>
        <input type=\"submit\" name=\"sButton\"><br>
        </form>";
        echo $seeallmarks;

        $seeremarks= "<form method=\"post\" action=\"seeremarks.php\">
                See remark requests<br>
        <input type=\"submit\" name=\"sButton\"><br>
        </form>";
        echo $seeremarks;
?>
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


