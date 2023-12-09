
<?php
    if (isset($_POST['createArray'])) {
        $numElements = $_POST['numElements'];

        // Tạo mảng với giá trị ngẫu nhiên
        $array = array();
        for ($i = 0; $i < $numElements; $i++) {
            $array[] = rand(1, 100); 
        }

        $arrayLength = count($array);
        $maxValue = max($array);
        $minValue = min($array);
        $sumValue = array_sum($array);
         // Chuyển mảng thành chuỗi
        $arrayString = implode(', ', $array);
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
            background-color: #FEECF8;
             width: 600px;
             height: 300px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 300px;
            }
        .result{
            background-color: #FF9799;
        }

         h1{
            background-color: #980065;
             font-family: cursive;
             color: white;
         }
         .result-res{
            width: 200px;
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
            <h1 align="center">Nhập và tính trên dãy số</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr>
                <th>Nhập dãy số phần tử:</th>
                <td> <input type="number" name="numElements" id="numElements" required></td>
            </tr>


            <tr>
                <td></td>
                <td><input type="submit" name="createArray" value="Tạo mảng và tính toán"></td>
            </tr>

             <tr>
                <th> Mảng:</th>
               <td>  <input type="text" id="array" name="array" value="<?php if(isset($arrayString)) echo htmlspecialchars($arrayString); ?>" readonly></td>
            </tr>

             <tr>
                <th> GTLN(Max) trong mảng:</th>
               <td><input type="text" id="maxValue" name="maxValue" value="<?php if(isset($maxValue)) echo $maxValue; ?>" readonly></td>
            </tr>

             <tr>
                <th> GTNN(Min) trong mảng:</th>
              <td> <input type="text" id="minValue" name="minValue" value="<?php if(isset($minValue)) echo $minValue; ?>" readonly></td>
            </tr>


            <tr>
                <th> Tổng dãy số:</th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><input type="text" id="sumValue" name="sumValue" value="<?php if(isset($sumValue)) echo $sumValue; ?>" readonly></td>
            </tr>

          


        </table>
        </form>
        
        
    </div>


     
</body>
</html>