
<?php
    $result=0;
    // Kiểm tra xem đã submit form chưa
    if(isset($_POST['submit'])){
        // Lấy chuỗi số từ form
        $numberStr = $_POST['numbers'];
        
        // Tách chuỗi thành mảng dựa trên dấu phẩy
        $numberArray = explode(',', $numberStr);
        // $total = 0;

        foreach($numberArray as $number){
            if(is_numeric($number)){
                $result += (float)$number;
            }
        }

        // Hiển thị tổng
        // $result= $total;
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
                <th>Nhập dãy số:</th>
                <td><input type="text" name="numbers" ></td>
            </tr>


            <tr>
                <td></td>
                <td><button type="submit" name="submit">Tính tổng dãy số</button></td>
            </tr>


            <tr>
                <th> Tổng dãy số:</th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><?php echo '<input type="text" value="'. $result . '" readonly>'  ?></td>
            </tr>

           <tr>
            <th></th>
               <th>
                   <p>Các số được nhập cách nhau bằng dấu ","</p>
               </th>
           </tr>


        </table>
        </form>
        
        
    </div>


     
</body>
</html>