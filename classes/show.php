  <?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id = ? ";
$data = $conn->prepare($sql);
$data->execute([$id]);
$classes = $data->fetch();
  ?>
  <!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>class Ma'lumotlari</title>
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
    <h2>class Ma'lumotlari</h2>

    <div class="info">
        <span class="label">:</span>
        <span class="value"><?php echo $classes['class_name']; ?></span>
    </div>
    <div class="info">
        <span class="label">:</span>
        <span class="value"><?php echo $classes['techer_id']; ?></span>
    </div>

   

    <a href="index.php" class="back-btn">⬅ Ortga</a>
</div>

</body>
</html>