<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumEven = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sumEven += $number;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Các Số Chẵn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        .result {
            font-size: 18px;
            color: #555;
            text-align: center;
            padding: 15px;
            background-color: #e0f7fa;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Tính Tổng Các Số Chẵn</h1>
    <div class="result">
        <?php
        echo "Tổng các số chẵn trong mảng là: <strong>" . $sumEven . "</strong>";
        ?>
    </div>
</div>

</body>
</html>
