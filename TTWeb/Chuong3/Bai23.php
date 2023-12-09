  <?php
  $ketQuaChu="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputNumber = $_POST["inputNumber"];

                if (strlen($inputNumber) !== 3 || !is_numeric($inputNumber)) {
                    echo "Vui lòng nhập số có 3 chữ số.";
                } else {
                    $chuSo = str_split($inputNumber);
                    $hangTram = docChu($chuSo[0]);
                    $hangChuc = docChu($chuSo[1]);
                    $hangDonVi = docChu($chuSo[2]);

                    $ketQuaChu = ($hangTram !== "không" ? $hangTram . " trăm " : "") .
                        ($hangChuc !== "không" ? $hangChuc . " mươi " : "") .
                        ($hangDonVi !== "không" ? $hangDonVi : " ");

                   // echo $ketQuaChu;
                }
            }

            function docChu($so) {
                switch ($so) {
                    case '0':
                        return "không";
                    case '1':
                        return "một";
                    case '2':
                        return "hai";
                    case '3':
                        return "ba";
                    case '4':
                        return "bốn";
                    case '5':
                        return "năm";
                    case '6':
                        return "sáu";
                    case '7':
                        return "bảy";
                    case '8':
                        return "tám";
                    case '9':
                        return "chín";
                    default:
                        return "";
                }
            }
            ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số có 3 chữ số</title>
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
    
    <form method="post">
        <div class="container">
        <h1 align="center">Đọc chữ số</h1>
        <form action="" method="Post">
            <table  align="center" >
                <tr>
                <td>Nhập số 0->999: </td>
                <td>
                   <input type="text" id="inputNumber" name="inputNumber">
                    <button type="submit">Đọc số</button>
                </td>
              </tr>

               <tr>
                <td>Bằng chữ: </td>
                <td><input class="result" type="text" name="result" value="<?php echo isset($ketQuaChu) ? $ketQuaChu : ''; ?>" readonly></td>
                
              </tr>
            </table>
        </form>
        
        
    </div>
    </form>
   
</body>
</html>




