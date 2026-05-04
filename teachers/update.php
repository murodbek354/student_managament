<?php
include "../config/db.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = $_POST['subject'];
$experience = $_POST['experience'];
$phone = $_POST ['phone'];
$address = $_POST['address'];
$id  = $_POST['id'];
$sql = "UPDATE teachers SET first_name = ?, last_name = ?, experience = ?, subject = ?, phone = ?, address = ? WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$first_name, $last_name, $experience, $subject, $phone, $address, $id]);

header("Location: index.php");
exit;
?>