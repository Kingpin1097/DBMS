<?php
require ('connect.php');
if($_POST['submit'])
echo $_POST['q1']."<br>";
echo $_POST['q2']."<br>";
echo $_POST['q3']."<br>";
echo $_POST['q4']."<br>";
echo $_POST['q5']."<br>";
echo $_POST['q6']."<br>";
echo $_POST['q7']."<br>";
echo $_POST['q8']."<br>";
echo $_POST['q9']."<br>";
header("Location:PTF.php");
?>