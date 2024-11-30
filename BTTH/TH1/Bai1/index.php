<?php
include 'config.php';

$stmt = $conn->prepare("SELECT * FROM flowers");
$stmt->execute();
$flowers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách các loài hoa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { border: 1px solid #ddd; padding: 8px; text-align: center; }
        td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        .actions button { margin-right: 10px; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; }
        .btn-add { margin-bottom: 20px; display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px; text-align: center; }
        .btn-edit { background-color: #2196F3; color: white; }
        .btn-delete { background-color: #f44336; color: white; }
        .btn-add:hover, .btn-edit:hover, .btn-delete:hover { opacity: 0.8; }
        img { border-radius: 5px; }
    </style>
</head>
<body>
    <div class="text-center">
        <h1><b>Danh sách các loài hoa</b></h1>
    </div>
    <main class="container mt-4">
    <a href="add.php" class="btn-add"><b>Thêm mới</b></a>
        <table>
            <thead>
                <tr>
                    <th>Tên hoa</th>
                    <th>Mô tả</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flowers as $flower): ?>
                    <tr>
                        <td><?= htmlspecialchars($flower['name']) ?></td>
                        <td><?= htmlspecialchars($flower['description']) ?></td>
                        <td><img src="images/<?= htmlspecialchars($flower['image']) ?>" width="80"></td>
                        <td class="actions">
                            <button class="btn-edit" onclick="window.location.href='edit.php?id=<?= $flower['id'] ?>'">Sửa</button>
                            <button class="btn-delete" onclick="if(confirm('Bạn có chắc chắn muốn xóa?')) window.location.href='delete.php?id=<?= $flower['id'] ?>'">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
