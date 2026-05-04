<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ? ";
$data = $conn->prepare($sql);
$data->execute([$id]);
$teacher = $data->fetch()
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>class Qo'shish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px #4facfe;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover {
            background: #007bff;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>class Qo'shish</h2>

    <form action="update.php" method="POST">
       
        <input type="text" name="class_name" value="<?= $teacher['class_name'] ?>"  required>
        <input type="text" name="teacher_id" value="<?= $teacher['teacher_id'] ?>"  required>
        

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>