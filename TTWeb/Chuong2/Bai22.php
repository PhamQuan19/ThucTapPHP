 <?php 
     $result="";
     // Xử lý khi form được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['A'];
            $b = $_POST['B'];
            $c = $_POST['C'];

            function giaiPT1($a, $b){
                if($a == 0){
                    if($b == 0){
                        return "Phuong trinh vo so nghiem";
                    }else{
                        return "Phuong trinh vo nghiem";
                    }
                }else{
                    return -$b / (2 * $a);
                }
            }

            function giaiPT2($a, $b, $c){
                if($a == 0){
                    return giaiPT1($b, $c);
                }else {
                // Tính delta
                $delta = $b * $b - 4 * $a * $c;
                if ($delta > 0) {
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    // $result="Phương trình có hai nghiệm phân biệt:<br>";
                   return "Phương trình có hai nghiệm phân biệt x1 = " . $x1 . " và x2 = " . $x2;
                  } else if ($delta == 0) {
                      $x = -$b / (2 * $a);
                      return "Phương trình có nghiệm kép:<br> " . $x;
                  } else {
                       return "Phương trình không có nghiệm .";
                  }
              }
                return "";
            }

            $result = giaiPT2($a, $b, $c);
        }

 ?>
 

<!DOCTYPE html>
<html>
  <head>
    <title>Giai Phuong Trinh Bac 2</title>

    <style type="text/css">
      html,
      body {
        height: 100%;
        padding: 0;
        margin: 0;
      }


      .flex-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;

      }

      .box {
        width: max-content;
        border: 1px solid #ddd;
        margin: auto;

      }

      .title {
        padding: 8px;
        text-align: center;
        font-size: 30px;
        background-color: #f7ce61;
        color: #9d4d06;
        font-family: cursive;
      }

      .form {
        background-color: #f5e4b6;
        padding: 15px;
        font-family: sans-serif;
        font-size: 20px;
      }

      td {
        padding-bottom: 10px;
      }

      input{
      	width: 400px;
      	height: 25px;
      	margin-left:30px ;
      }

      .heso{
        width: 100px;
      }

      button{
      	width: 300px;
      	height: 35px;
      	font-size: 20px;
      	background-color: #f5e4b6;
      }

    
      .result{
      	color: red;
      }
    </style>
  </head>
  <body>
    <div class="flex-container">
      <div class="box">
        <div class="title">Số chia hết cho A và B</div>

        <form class="form" method="POST">
          <table>
            <tbody>
              <tr>
                <td>Phương trình: </td>
                <td>
                   <input class="heso" type="number" name="A" value="<?php echo isset($_POST['A']) ? $_POST['A'] : ''; ?>"> X2
                  <input class="heso" type="number" name="B" value="<?php echo isset($_POST['B']) ? $_POST['B'] : ''; ?>">X
                  <input class="heso" type="number" name="C" value="<?php echo isset($_POST['C']) ? $_POST['C'] : ''; ?>">=0
                  <!-- <input class="heso" type="text" name="C" />=0 -->
                </td>
              </tr>

               <tr>
                <td>Nghiệm của phương trình: </td>
                <td><input class="result" type="text" name="result" value="<?php echo isset($result) ? $result : ''; ?>" readonly></td>
                
              </tr>
              <tr>
                <td></td>
                <td><button type="submit" >Giải Phương Trình</button></td>
              </tr>
              


            
            </tbody>
          </table>
        </form>
      </div>
    </div>
   
  </body>
</html>

