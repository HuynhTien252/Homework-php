<?php include "list.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">🛍️ Danh sách sản phẩm</h2>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product["name"] ?></td>
                <td 
                    style="<?= $product["price"] > 1000000 ? 'background-color: yellow;' : '' ?>">
                    <?= number_format($product["price"], 0, ',', '.') ?> VND
                </td>
                <td><?= $product["description"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
