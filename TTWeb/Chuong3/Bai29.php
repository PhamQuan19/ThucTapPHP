
<?php 
    $result="";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị ngày, tháng và năm sinh từ form
        $ngay = $_POST["ngay"];
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];

        // Kiểm tra xem ngày, tháng và năm có hợp lệ không
        if (!checkdate($thang, $ngay, $nam)) {
            echo "Ngày tháng năm sinh không hợp lệ.";
        } else {
            // Tạo đối tượng DateTime cho ngày sinh nhật
            $ngaySinh = new DateTime("$nam-$thang-$ngay");
            
            // Tạo đối tượng DateTime cho thời điểm hiện tại
            $ngayHienTai = new DateTime();
            
            // Tính tuổi hiện tại
            $tuoi = $ngaySinh->diff($ngayHienTai)->y;
            
            // Tạo đối tượng DateTime cho ngày sinh nhật trong năm hiện tại
            $ngaySinhTrongNam = new DateTime(date("Y") . "-$thang-$ngay");
            
            // Kiểm tra xem đã qua sinh nhật trong năm hiện tại chưa
            if ($ngayHienTai >= $ngaySinhTrongNam) {
                // Tính số ngày đã qua sinh nhật trong năm hiện tại
                $soNgayDaQua = $ngayHienTai->diff($ngaySinhTrongNam)->days;
                
                // Kiểm tra xem có trùng với ngày tháng hiện tại không
                if ($ngayHienTai->format("d-m") == $ngaySinhTrongNam->format("d-m")) {
                    $result=  "Chúc mừng sinh nhật! Bạn đã $tuoi tuổi.";
                } else {
                    // echo "Bạn đã $tuoi tuổi và đã qua sinh nhật trong năm này. Số ngày đã qua: $soNgayDaQua ngày.";
                    $result= "Năm nay bạn $tuoi tuổi Ngày sinh nhật của bạn đã qua $soNgayDaQua ngày.";
                }
            } else {
                // Tính số ngày còn lại đến sinh nhật trong năm hiện tại
                $soNgayConLai = $ngaySinhTrongNam->diff($ngayHienTai)->days;
                // echo "Bạn đang $tuoi tuổi và còn $soNgayConLai ngày nữa đến sinh nhật trong năm này.";
                 $result= "Năm nay bạn $tuoi tuổi còn $soNgayConLai ngày là sinh nhật bạn.";

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
             width: 800px;
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
            background-color: #F2CCD9;
         }


         .result{
            width: 600px;
            height: 50px;
            text-align: center;
         }

    </style>
</head>
<body>
    <div class="container">
            <h1 align="center">Ngày sinh</h1>
        <form action="" method="Post">
            <table  align="center" >
            <tr >
                <th>Ngày/Tháng/Năm:</th>
                <td>
                    <input class="thangnam" type="text" name="ngay" > /
                    <input class="thangnam" type="text" name="thang" > /
                    <input class="thangnam" type="text" name="nam" >
                    <button type="submit" name="btn">Thông báo</button>
                </td>
            </tr>

            <tr>
                <th> </th>
                <!-- <td><input type="text" name="chuoi2" ></td> -->
                <td><?php echo '<input class="result" type="text" value="'. $result . '" readonly>'  ?></td>
            </tr>

        </table>
        </form>
        
        
    </div>


     
</body>
</html>