<?php

    $serverName="localhost:3307";
    $user="root";
    $pass="";
    $database="users";
    $conn=mysqli_connect($serverName,$user,$pass,$database);


     if (isset($_POST['btn'])) 
        {
            // B1: Lấy thông tin
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hoten= $_POST["hoten"];
            $email= $_POST["email"];

            $sql="Insert Into dangki values('$username','$password ','$hoten','$email')";

            // B2: Kiểm tra dữ liệu
            if (!$username || !$password || !$hoten || !$email){
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else {
               $query=mysqli_query($conn,$sql);
               if($query){
                echo 'Đăng kí thành công!';
               }
            }
          
            
        }


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        .container{
            margin-top: 30px;
            margin-left: 40%;
            width: 400px;
        }

        input{
            margin: 5px;
            height: 20px;
            width: 200px;
            }
    </style>

</head>
<body>
<div class="container">
		<h1 align="center">Form đăng kí</h1>
		<form action="" method="Post">
            <table>
                <tr>
                <th>Username: </th>
				<td><input type="text" name="username" id=""></td>
                </tr>

                <tr>
                <th>Password: </th>
				<td><input type="text" name="password" id=""></td>
                </tr>

                <tr>
                <th>Họ tên: </th>
				<td><input type="text" name="hoten" id=""></td>
                </tr>

                <tr>
                <th>Email: </th>
				<td><input type="text" name="email" id=""></td>
                </tr>

                <tr>
				<td></td>
				<td><button name="btn">Đăng kí</button></td>
			</tr>
            </table>
</body>
</html>
