<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển Thị Ngày Tháng Năm Hiện Tại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #2c3e50;
        }
        .date {
            font-size: 20px;
            background-color: #ecf0f1;
            padding: 10px;
            border-radius: 5px;
            color: #3498db;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ngày Tháng Năm Hiện Tại</h1>
    <div class="date">
        <?php
        echo "Hôm nay là: " . date('l, d/m/Y');
        ?>
    </div>
</div>

</body>
</html>
