
<?php
    if (isset($_POST['submit']) ) {
        $arrayInput = explode(',', $_POST['numbers']);
        $sortedArrayAsc = $arrayInput;
        $sortedArrayDesc = $arrayInput;

        if (isset($_POST['submit'])) {
            sort($sortedArrayAsc, SORT_NUMERIC);
            rsort($sortedArrayDesc, SORT_NUMERIC);
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
                <td></td>
                <td><button type="submit" name="submit">Sắp xếp</button></td>
            </tr>

              <tr>
                <th >Mảng sau khi sắp xếp</th>
            </tr>
            <tr>
                <th>Mảng tăng dần</th>
                 <td><input type="text" id="sortedArrayAsc" name="sortedArrayAsc" value="<?php if(isset($sortedArrayAsc)) echo htmlspecialchars(implode(', ', $sortedArrayAsc)); ?>" readonly></td>
            </tr>

            <tr>
                <th> Mảng giảm dần</th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><input type="text" id="sortedArrayDesc" name="sortedArrayDesc" value="<?php if(isset($sortedArrayDesc)) echo htmlspecialchars(implode(', ', $sortedArrayDesc)); ?>" readonly></td>
            </tr>

             <tr>
                <th colspan="2"> (Các phần tử mảng sẽ cách nhau bằng dấu ",")</th>
               
            </tr>

        </table>
        </form>
        
        
    </div>


     
</body>
</html>