
<?php 
        $chuoikq="";

         if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // B1: Lấy thông tin
            $chuoi = $_POST["chuoi"];
            $tugoc = $_POST["tugoc"];
            $tuthaythe=$_POST["tuthaythe"];
            // B2: Kiểm tra dữ liệu
            if (!$chuoi || !$tugoc || !$tuthaythe){
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else {
                $chuoikq=str_replace($tugoc,$tuthaythe,$chuoi);
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
                <th>từ gốc: </th>
                <td><input type="text" name="tugoc" id=""></td>
                
            </tr>
             <tr>
                <th>Từ thay thế: </th>
                <td><input type="text" name="tuthaythe" id=""></td>
                
            </tr>

            <tr>
                <td></td>
                <td><button name="btn">Thay thế</button></td>
            </tr>

            <tr>
                <td></td>
                <!-- <td><input type="text" name="kqua" id=""></td> -->
                <td><?php echo '<input type="text" value="' . $chuoikq . '" readonly>'  ?></td>
            </tr>


        </table>
        </form>
        
        
    </div>


     
</body>
</html>