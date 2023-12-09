<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bảng cửu chương</title>
</head>
<body>
	<?php
		ini_set('display_errors', 0);
		$a=$_POST['a'];
		$chuoi="";
	?>
	<form action="" method="post">
		<table align="center" style="background: #C4EDED;font-size: 25px">
			<tr style="text-align: center; background-color: #009E9F;color: white">
				<td colspan="3">
					<h2>BẢNG CỬU CHƯƠNG</h2>
				</td>
			</tr>
			<tr>
				<td>Cửu chương: </td>
				<td>
					<input type="text" name="a"  size="10">
				</td>
				<td>
					<input type="submit" name="btn" value="Thực hiện" size="15">
				</td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="3" style=" background-color: #009E9F;color: white"><h3>KẾT QUẢ</h3></td>
			</tr>
			<tr  align="center" style="border-color:#009E9F;border: 1">
				<td style="text-align: center " colspan="3">
					<?php
					  if(isset($_POST['btn']) && isset($_POST['a'])){
					  for($i = 1; $i <= 10; $i++) {
						$tich=$a *$i;
						echo $chuoi=$a." x ".$i." = ".$tich."<br>";		
		        	}}?>
				</td>
			</tr>
		</table>		
	</form>

</body>
</html>