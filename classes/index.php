<?php
include "../config/db.php"; 
$sql = "SELECT * FROM classes";
$data = $conn->prepare($sql);
$data->execute();
$classes = $data->fetchAll();
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>claSS Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
        }

        .add-btn {
            background: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-btn:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #007bff;
            color: white;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .actions button {
            margin: 2px;
            padding: 5px 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }

        .view-btn { background: #17a2b8; }
        .edit-btn { background: #ffc107; color: black; }
        .delete-btn { background: #dc3545; }

        .view-btn:hover { background: #138496; }
        .edit-btn:hover { background: #e0a800; }
        .delete-btn:hover { background: #c82333; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>classes List</h2>
        <a href="create.php" class="add-btn">+ class qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>teacher_id</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>

           <?php foreach($classes as $class):?>
                <tr>
                    <td><?= $cnt++ ?></td>
                    <td><?= $class['class_name'] ?></td>
                    <td><?= $class['clas_name'] ?></td>d>
                    <td class="actions">
                        <a href="show.php?id=<?= $class['id'] ?>" class="view-btn">Ko'rish</a>
                        <a href="edit.php?id=<?= $class['id']?>" class="edit-btn">Tahrirlash</a>
                        <a href="delete.php?id=<?= $class['id'] ?>" class="delete-btn" onclick="return confirm('0\'chirasizm')">O'chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>