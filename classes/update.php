<?php
include "../config/db.php";
$class_name = $_POST['class_name'];
$teacher_id = $_POST['techer_id'];

$sql = "UPDATE teachers SET class_name = ?, teacher_id = ?, ";
$data = $conn->prepare($sql);
$data->execute([$class_name, $teacher_id, ]);
header("Location: index.php");
exit;
?>