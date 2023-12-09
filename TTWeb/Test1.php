
  <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="thanhvien";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if (isset($_POST['btn'])) 
        {
            
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $hoten= $_POST["ht"];
            $email= $_POST["email"];

            $sql="Insert Into dangkyTV values('$user','$pass ','$hoten','$email')";

            
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
<html>
<head>
    <title>Đăng ký thành viên</title>
    <style type="text/css">
        table{
            background-color: #ccd3de;
        }
    </style>
</head>
<body>
    <form action="register.php" method="post">
        <table align="center">
            <tr>
                <td>Form dang ky</td>
            </tr>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="textbox" name="user" id="">
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="textbox" name="pass" id="">
                </td>
            </tr>
            <tr>
                <td>Ho ten: </td>
                <td>
                    <input type="textbox" name="ht" id="">
                </td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>
                    <input type="textbox" name="email" id="">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button name="btn">
                        <!-- <input type="submit" name="" value="Dang ky"> -->
                        Dang ky
                    </button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>