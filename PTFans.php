<?php
session_start();
require ('connect.php');
  $v1 = mysqli_real_escape_string($db,$_POST['q1']);
  $v2 = mysqli_real_escape_string($db,$_POST['q2']);
  $v3 = mysqli_real_escape_string($db,$_POST['q3']);
  $v4 = mysqli_real_escape_string($db,$_POST['q4']);
  $v5 = mysqli_real_escape_string($db,$_POST['q5']);
  $v6 = mysqli_real_escape_string($db,$_POST['q6']);
  $v7 = mysqli_real_escape_string($db,$_POST['q7']);
  $v8 = mysqli_real_escape_string($db,$_POST['q8']);
  $v9 = mysqli_real_escape_string($db,$_POST['q9']);

  mysqli_query($db, "INSERT INTO pre_awareness 
  (stud_id,question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9,) 
  VALUES ('$st_det[0]','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')");
header("Location:PTF.php");
mysqli_close($db);
?>