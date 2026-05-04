<?php
include "../config/db.php"; 
$sql = "SELECT * FROM teachers";
$data = $conn->prepare($sql);
$data->execute();
$teachers = $data->fetchAll();
$cnt = 1;
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>teachers Table</title>
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
        <h2>teachers List</h2>
        <a href="create.php" class="add-btn">+ teacher qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>subject</th>
                <th>Phone</th>
                <th>Address</th>
                <th>experience</th>
                 <th>Amallar</th>
            </tr>
        </thead>
        <tbody>

           <?php foreach($teachers as $teacher):?>
                <tr>
                    <td><?= $cnt++ ?></td>
                    <td><?= $teacher['first_name'] ?></td>
                    <td><?= $teacher['last_name'] ?></td>d>
                    <td><?= $teacher['phone'] ?></td>
                    <td><?= $teacher['address'] ?></td>
                    <td><?= $teacher['experience'] ?></td>
                    <td><?= $teacher['subject'] ?></td>
                    <td class="actions">
                        <a href="show.php?id=<?= $teacher['id'] ?>" class="view-btn">Ko'rish</a>
                        <a href="edit.php?id=<?= $teacher['id']?>" class="edit-btn">Tahrirlash</a>
                        <a href="delete.php?id=<?= $teacher['id'] ?>" class="delete-btn" onclick="return confirm('0\'chirasizm')">O'chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>