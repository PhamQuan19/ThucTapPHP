<?php 
		$result="";
	 // Lấy giá trị N, A và B từ form
      
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$n = $_POST["N"];
        	$a = $_POST["A"];
        	$b = $_POST["B"];
    	 if (!is_numeric($n) || !is_numeric($a) || !is_numeric($b) || $n <= 0 || $a <= 0 || $b <= 0) {
        	echo "Vui lòng nhập các số nguyên dương.";
        } else {
            for ($i = 1; $i <= $n; $i++) {
                if ($i % $a == 0 && $i % $b == 0) {
                     $result .= $i . " ";
                }
            }
		}

	}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <title>Chia A va B</title>

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
      	width: 200px;
      	height: 25px;
      	margin-left:30px ;
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
                <td>Nhập n: </td>
                <td><input type="text" name="N" /></td>
              </tr>

               <tr>
                <td>Nhập A: </td>
                <td><input type="text" name ="A" /></td>
              </tr>

              <tr>
                <td>Nhập B: </td>
                <td><input type="text" name ="B" /></td>
              </tr>

              <tr>
                <td></td>
                <td><button type="submit" >Các số <=N chia hết cho A và B</button></td>
                <!-- <td><input type="submit" name="submit" value="Các số <=N chia hết cho A và B"></td> -->

                	
              </tr>
              

               <tr>
               	<td></td>
               
               	<td><input class="result" type="text" name="result" value="<?php echo isset($result) ? $result : ''; ?>" readonly></td>

               	
                <!-- <td ><input class="ketqua" type="text" id="result" /></td> -->
              </tr>

            
            </tbody>
          </table>
        </form>
      </div>
    </div>
   
  </body>
</html>