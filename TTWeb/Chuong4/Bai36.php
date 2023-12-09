
<?php
    if (isset($_POST['replace'])) {
        $arrayInput = explode(',', $_POST['arrayInput']);
        $oldValue = $_POST['oldValue'];
        $newValue = $_POST['newValue'];

        // Thực hiện thay thế giá trị trong mảng
        $outputArray = array_map(function($item) use ($oldValue, $newValue) {
            return ($item == $oldValue) ? $newValue : $item;
        }, $arrayInput);
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
             height: 350px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 300px;
            }

         h1{
            background-color: #980065;
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
                <td><input type="text" name="arrayInput" id="arrayInput" required></td>
            </tr>

             <tr>
                <th>Nhập giá trị cần thay thế:</th>
                <td><input type="text" name="oldValue" id="oldValue" required></td>
            </tr>

             <tr>
                <th>Nhập giá trị thay thế:</th>
                <td> <input type="text" name="newValue" id="newValue" required></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit" name="replace">Thay thế</button></td>
            </tr>


            <tr>
                <th>Mảng cũ:</th>
                 <td><input type="text" id="inputArray" name="inputArray" value="<?php if(isset($_POST['arrayInput'])) echo htmlspecialchars($_POST['arrayInput']); ?>" readonly></td>
            </tr>

            <tr>
                <th> Mảng sau khi thay thế:</th>
                <td> <input type="text" id="outputArray" name="outputArray" value="<?php if(isset($outputArray)) echo htmlspecialchars(implode(',', $outputArray)); ?>" readonly></td>
            </tr>

             <tr>
                <th colspan="2"> (Các phần tử mảng sẽ cách nhau bằng dấu ",")</th>
               
            </tr>

        </table>
        </form>
        
        
    </div>


     
</body>
</html>