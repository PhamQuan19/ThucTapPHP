
<?php 
        $chuoikq="";

         if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // B1: Lấy thông tin
            $chuoi = $_POST["chuoi"];
            $tuTim=$_POST["tuTim"];
            // B2: Kiểm tra dữ liệu
            if (!$chuoi || !$tuTim ){
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else {
                $chuoikq=strpos($chuoi, $tuTim);
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
            background-color: aqua;
             width: 500px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 200px;
            }

         h1{
            background-color: red;
         }

    </style>
</head>
<body>
    <div class="container">
            <h1 align="center">Thay Thế Từ Trong Chuỗi</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr>
                <th>Chuỗi:</th>
                <td><input type="text" name="chuoi" id=""></td>
            </tr>

             <tr>
                <th>Từ cần tìm: </th>
                <td><input type="text" name="tuTim" id=""></td>
                
            </tr>

            <tr>
                <td></td>
                <td><button name="btn">Tìm kiếm</button></td>
            </tr>

            <tr>
                <td></td>
                <!-- <td><input type="text" name="kqua" id=""></td> -->
                <td><?php echo '<input type="text" value="'. $chuoikq . '" readonly>'  ?></td>
            </tr>


        </table>
        </form>
        
        
    </div>


     
</body>
</html>