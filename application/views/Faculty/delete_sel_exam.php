<?php

include("config.php");
$id = $_GET['exam_id'];
$query = mysqli_query($con, "DELETE FROM exam WHERE exam_id=$id");
header("location:examlist.php");

?>