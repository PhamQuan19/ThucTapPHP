<!DOCTYPE html>
<html>
<head>
    <title>Quản lý giỏ hoa</title>
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
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        }
    </style>
</head>
<body>

<?php
function tim_hoa($ten_hoa, $mang_hoa) {
    $kq = 0;
    foreach ($mang_hoa as $hoa) {
        if (strcasecmp($hoa, $ten_hoa) == 0) {
            $kq = 1;
            break;
        }
    }
    return $kq;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten_hoa = $_POST["ten_hoa"];
    $gio_hoa = explode("\n", $_POST["gio_hoa"]);
    $mang_hoa = array_map('trim', $gio_hoa);

    if (tim_hoa($ten_hoa, $mang_hoa)) {
        echo "<p class='result'>Hoa $ten_hoa đã có trong giỏ.</p>";
    } else {
        $mang_hoa[] = $ten_hoa;
        echo "<p class='result'>Đã thêm hoa $ten_hoa vào giỏ.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="ten_hoa">Tên hoa:</label>
    <input type="text" name="ten_hoa" id="ten_hoa" required><br>
    <label for="gio_hoa">Giỏ hoa (mỗi hoa trên một dòng):</label>
    <textarea name="gio_hoa" id="gio_hoa" rows="4" cols="50" readonly>
<?php
if (isset($mang_hoa)) {
    foreach ($mang_hoa as $hoa) {
        echo "$hoa--";
    }
}
?>
    </textarea>
    <input type="submit" name="submit" value="Thêm vào giỏ hoa">
</form>

</body>
</html>