<?php
include "../config/db.php"; 
$sql = "SELECT * FROM students";
$data = $conn->prepare($sql);
$data->execute();
$students = $data->fetchAll();
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
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
        <h2>Students List</h2>
        <a href="create.php" class="add-btn">+ Student qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

           <?php foreach($students as $student):?>
                <tr>
                    <td><?= $cnt++ ?></td>
                    <td><?= $student['first_name'] ?></td>
                    <td><?= $student['last_name'] ?></td>
                    <td><?= $student['age'] ?></td>
                    <td><?= $student['class_name'] ?></td>
                    <td><?= $student['phone'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td class="actions">
                        <a href="show.php?id=<?= $student['id'] ?>" class="view-btn">Ko'rish</a>
                        <a href="edit.php?id=<?= $student['id']?>" class="edit-btn">Tahrirlash</a>
                        <a href="delete.php?id=<?= $student['id'] ?>" class="delete-btn" onclick="return confirm('0\'chirasizm')">O'chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>