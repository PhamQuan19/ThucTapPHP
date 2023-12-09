
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chuoi_mang = $_POST["chuoi_mang"];

    // Tạo mảng từ chuỗi đầu vào
    $mang = explode(",", $chuoi_mang);

    // Đếm số lần xuất hiện của từng phần tử trong mảng
    $dem = array_count_values($mang);

    // Tạo mảng duy nhất
    $mang_duy_nhat = array_unique($mang);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đếm số lần xuất hiện và tạo mảng duy nhất</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"][readonly] {
            background-color: #ddd;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            font-weight: bold;
            margin-top: 10px;
            text-align: left;
        }
    </style>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="chuoi_mang">Chuỗi mảng (các phần tử cách nhau bởi dấu phẩy):</label>
    <input type="text" name="chuoi_mang" id="chuoi_mang" required><br>
    <input type="submit" name="submit" value="Thực hiện">
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($mang) && isset($dem) && isset($mang_duy_nhat)) {
        echo "<div class='result'><label>Mảng:</label><br><input type='text' readonly value='" . implode(", ", $mang) . "'></div>";
        echo "<div class='result'><label>Số lần xuất hiện:</label><br><input type='text' readonly value='" . json_encode($dem) . "'></div>";
        echo "<div class='result'><label>Mảng duy nhất:</label><br><input type='text' readonly value='" . implode(", ", $mang_duy_nhat) . "'></div>";
    }
    ?>
</form>

</body>
</html>