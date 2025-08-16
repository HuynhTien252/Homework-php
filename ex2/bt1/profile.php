<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        caption {
            font-size: 1.2em;
            margin-bottom: 10px;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <?php 
        $Hoten = "Huỳnh Ngọc Tiên";
        $Namsinh = 2006;
        $Quequan = "Hồ Chí Minh";    ?>
    <table>
        <caption>Thông tin cá nhân</caption>
        <tr>
            <th>Họ tên</th>
            <th>Năm Sinh</th>
            <th>Quê quán</th>
        </tr>
        <tr>
            <td><?php echo $Hoten ?></td>
            <td><?php echo $Namsinh ?></td>
            <td><?php echo $Quequan ?></td>
        </tr>
    </table>
    <p style="text-align: center; color:green"><?php  echo "Thông tin đã được cập nhật thàng công"?></p>   
</body>
</html>