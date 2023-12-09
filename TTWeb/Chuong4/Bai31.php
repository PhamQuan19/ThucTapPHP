<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Năm Nhuận</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tìm Năm Nhuận</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="startYear">Nhập năm bắt đầu:</label>
        <input type="number" name="startYear" id="startYear" max="2000" required>
        <br>
        <input type="submit" value="Tìm Năm Nhuận">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $startYear = $_POST["startYear"];

        
        $currentYear = date("Y");

       
        echo "<p>Các năm nhuận từ $startYear đến $currentYear:</p>";
        for ($year = $startYear; $year <= $currentYear; $year++) {
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "<p>$year</p>";
            }
        }
    }
    ?>
</body>
</html>
