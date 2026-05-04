  <?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ? ";
$data = $conn->prepare($sql);
$data->execute([$id]);
$teacher = $data->fetch();
  ?>
  <!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Ma'lumotlari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin: 10px 0;
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .value {
            color: #555;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student Ma'lumotlari</h2>  

    <!-- PHP bilan keladigan ma'lumotlar -->
    <div class="info">
        <span class="label">Ismi:</span>
        <span class="value"><?php echo $teacher['first_name']; ?></span>
    </div>

    <div class="info">
        <span class="label">Familiyasi:</span>
        <span class="value"><?php echo $teacher['last_name']; ?></span>
    </div>
 
    

    

    <div class="info">
        <span class="label">Telefon:</span>
        <span class="value"><?php echo $teacher['phone']; ?></span>
    </div>

    <div class="info">
        <span class="label">fan:</span>
        <span class="value"><?php echo $teacher['subject']; ?></span>
    </div>
    <div class="info">
        <span class="label">Manzil:</span>
        <span class="value"><?php echo $teacher['experience']; ?></span>
    </div>
    <div class="info">
        <span class="label">Manzil:</span>
        <span class="value"><?php echo $teacher['address']; ?></span>
    </div>

    <a href="index.php" class="back-btn">⬅ Ortga</a>
</div>

</body>
</html>