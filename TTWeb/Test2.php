
    <?php
    if (isset($_POST['createArray'])) {
        $numElements = $_POST['numElements'];

        // Tạo mảng với giá trị ngẫu nhiên
        $array = array();
        for ($i = 0; $i < $numElements; $i++) {
            $array[] = rand(1, 100); // Tạo giá trị ngẫu nhiên từ 1 đến 100
        }

        $arrayLength = count($array);
        $maxValue = max($array);
        $minValue = min($array);
        $sumValue = array_sum($array);
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tạo và Tính Toán Mảng</title>
</head>
<body>
    <h1>Tạo và Tính Toán Mảng</h1>
    <form method="post" action="">
        <label for="numElements">Nhập số phần tử mảng:</label>
        <input type="number" name="numElements" id="numElements" required>
        <br>

        <input type="submit" name="createArray" value="Tạo mảng và tính toán">
        <br>

        <label for="arrayLength">Số phần tử mảng:</label>
        <input type="text" id="arrayLength" name="arrayLength" value="<?php if(isset($arrayLength)) echo $arrayLength; ?>" readonly>
        <br>

        <label for="maxValue">Giá trị lớn nhất:</label>
        <input type="text" id="maxValue" name="maxValue" value="<?php if(isset($maxValue)) echo $maxValue; ?>" readonly>
        <br>

        <label for="minValue">Giá trị nhỏ nhất:</label>
        <input type="text" id="minValue" name="minValue" value="<?php if(isset($minValue)) echo $minValue; ?>" readonly>
        <br>

        <label for="sumValue">Tổng mảng:</label>
        <input type="text" id="sumValue" name="sumValue" value="<?php if(isset($sumValue)) echo $sumValue; ?>" readonly>
    </form>

</body>
</html>
