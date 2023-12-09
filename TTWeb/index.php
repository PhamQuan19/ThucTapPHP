
<?php 
	$dien_tich=0;

		 if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // B1: Lấy thông tin
            $dai = $_POST["dai"];
    		$rong = $_POST["rong"];
            // B2: Kiểm tra dữ liệu
            if (!$dai || !$rong){
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else {
                $dien_tich = $dai * $rong;
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
			<h1 align="center">Diện Tích Hình Chữ Nhật</h1>
		<form action="" method="Post">
			<table  align="center" >
			<tr>
				<th>Chiều dài:</th>
				<td><input type="text" name="dai" id=""></td>
			</tr>

			<tr>
				<th>Chiều rộng: </th>
				<td><input type="text" name="rong" id=""></td>
				
			</tr>

			<tr>
				<th>Kết quả:</th>
				<!-- <td><input type="text" name="kqua" id=""></td> -->
				<td><?php echo '<input type="text" value="' . $dien_tich . '" readonly>'  ?></td>
			</tr>

			<tr>
				<td></td>
				<td><button name="btn">Kết quả</button></td>
			</tr>

		</table>
		</form>
		
		
	</div>


	 
</body>
</html>