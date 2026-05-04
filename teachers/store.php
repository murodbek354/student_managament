<?php
include "../config/db.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$subject = $_POST['subject'];
$experience = $_POST['experience'];

$sql = "INSERT INTO teachers (first_name, last_name, subject, phone, address, experience)
VALUES (?, ?, ?, ?, ?, ?)";
$data = $conn->prepare($sql);

$data->execute([$first_name, $last_name, $subject,  $phone, $address, $experience,]);

header("Location: index.php") 
?>