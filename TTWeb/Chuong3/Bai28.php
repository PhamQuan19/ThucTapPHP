
<?php 
    $kq="";
        // Xử lý khi form được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị của hai chuỗi từ form
        $str1 = $_POST["thang"];
        $str2 = $_POST["nam"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị tháng và năm từ form
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];

        // Kiểm tra xem tháng và năm có hợp lệ không
        if (!is_numeric($thang) || !is_numeric($nam) || $thang < 1 || $thang > 12 || $nam < 1) {
            echo "Vui lòng nhập tháng (1-12) và năm hợp lệ.";
        } else {
            // Sử dụng switch...case để tính số ngày trong tháng
            switch ($thang) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    $soNgay = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    $soNgay = 30;
                    break;
                case 2:
                    // Kiểm tra năm nhuận
                    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
                        $soNgay = 29;
                    } else {
                        $soNgay = 28;
                    }
                    break;
                default:
                    $soNgay = 0; 
                    break;
            }
            
            if (!($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
                $kq="Tháng $thang năm $nam có $soNgay ngày.";
            } else if(($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
                $kq ="Năm $nam là năm nhuận va tháng $thang có $soNgay ngày";
            }else{
                $kq ="Không hợp lệ";
            }
        }
    
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
            background-color: #FECCCD;
             width: 600px;
             height: 250px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 300px;
            }

         h1{
            background-color: #FD5E5B;
             font-family: cursive;
             color: white;
         }
         .thangnam{
            width: 100px;
         }
         button{
            width: 100px;
            height: 30px;
         }

         .result{
            width: 400px;
         }

    </style>
</head>
<body>
    <div class="container">
            <h1 align="center">Tính ngày trong tháng</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr>
                <th>Tháng/Năm:</th>
                <td>
                    <input class="thangnam" type="text" name="thang" > /
                    <input class="thangnam" type="text" name="nam" >
                </td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="btn">Tính số ngày</button></td>
            </tr>

            <tr>
                <th> </th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><?php echo '<input class="result" type="text" value="'. $kq . '" readonly>'  ?></td>
            </tr>

           


        </table>
        </form>
        
        
    </div>


     
</body>
</html>