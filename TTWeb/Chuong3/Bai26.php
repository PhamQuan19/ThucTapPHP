
<?php 
    $chuoikq="";
        // Xử lý khi form được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị của hai chuỗi từ form
        $str1 = $_POST["chuoi1"];
        $str2 = $_POST["chuoi2"];

        // So sánh hai chuỗi
        if ($str1 == $str2) {
            $chuoikq= "Chuỗi 1 và chuỗi 2 giống nhau.";
        } else {
            $chuoikq= "Chuỗi 1 và chuỗi 2 khác nhau.";
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
             height: 250px;
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
            background-color:#389797;
            width: 100px;
            height: 30px;
         }

    </style>
</head>
<body>
    <div class="container">
            <h1 align="center">Thay Thế Từ Trong Chuỗi</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr>
                <th>Nhập chuỗi thứ nhất:</th>
                <td><input type="text" name="chuoi1" ></td>
            </tr>

             <tr>
                <th>hập chuỗi thứ hai: </th>
                <td><input type="text" name="chuoi2" ></td>
                
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="btn">So sánh</button></td>
            </tr>

            <tr>
                <th> </th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><?php echo '<input type="text" value="'. $chuoikq . '" readonly>'  ?></td>
            </tr>

           


        </table>
        </form>
        
        
    </div>


     
</body>
</html>