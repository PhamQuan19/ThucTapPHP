
<?php
    if (isset($_POST['submit'])) {
        $numbers = explode(',', $_POST['numbers']);
        $searchNumber = $_POST['search'];

        $ketQua = timKiemTrongMang($numbers, $searchNumber);
    }

    function timKiemTrongMang($mang, $soCanTim) {
        $positions = array();
        foreach ($mang as $key => $value) {
            if ($value == $soCanTim) {
                $positions[] = $key;
            }
        }
        
        if (!empty($positions)) {
            return "Số $soCanTim được tìm thấy tại vị trí: " . implode(', ', $positions);
        } else {
            return "Số $soCanTim không được tìm thấy trong mảng.";
        }
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .container{
            margin-top: 30px;
            text-align: center;
            margin-left: 30%;
            background-color: #D1DED4;
             width: 600px;
             height: 300px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 300px;
            }

         h1{
            background-color: #389797;
             font-family: cursive;
             color: white;
         }
         button{
            background-color:#FCFE99;
            width: 150px;
            height: 30px;
         }

    </style>
</head>
<body>
    <div class="container">
            <h1 align="center">Tìm kiếm</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr>
                <th>Nhập mảng:</th>
                <td><input type="text" name="numbers" id="numbers" value="<?php if(isset($_POST['numbers'])) echo htmlspecialchars($_POST['numbers']); ?>" required></td>
            </tr>

             <tr>
                <th>Nhập số cần tìm:</th>
                <td><input type="number" name="search" id="search" value="<?php if(isset($_POST['search'])) echo htmlspecialchars($_POST['search']); ?>" required></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="submit">Tìm kiếm</button></td>
            </tr>


            <tr>
                <th>Mảng:</th>
                 <td><input type="text" id="inputArray" value="<?php if(isset($_POST['numbers'])) echo htmlspecialchars($_POST['numbers']); ?>" readonly></td>
            </tr>

            <tr>
                <th> Kết quả tìm kiếm:</th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><input style="color: red" type="text" id="result" value="<?php if(isset($ketQua)) echo $ketQua; ?>" readonly></td>
            </tr>

             <tr>
                <th colspan="2"> (Các phần tử mảng sẽ cách nhau bằng dấu ",")</th>
               
            </tr>

        </table>
        </form>
        
        
    </div>


     
</body>
</html>