<?php 
	

 ?>

 
<!DOCTYPE html>
<html>
  <head>
    <title>Tong Tich</title>

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

      }

      button{
      	width: 300px;
      	height: 35px;
      	font-size: 20px;
      	background-color: #f5e4b6;
      }

      .ketqua{
      	width: 400px;
      }

    </style>
  </head>
  <body>
    <div class="flex-container">
      <div class="box">
        <div class="title">Tìm Kiếm Chuỗi</div>

        <form class="form" method="POST">
          <table>
            <tbody>
            

               <tr>
                <td>Nhập n: </td>
                <td><input type="text" id="numberN" /></td>
              </tr>

              <tr>
                <td></td>
                <td><button type="button" onclick="printPrimes()">Các số nguyên tố <=N</button></td>
              </tr>
              


               <tr>
               	<td></td>
                <td ><input class="ketqua" type="text" id="result" /></td>
              </tr>

            
            </tbody>
          </table>
        </form>
      </div>
    </div>


   
  </body>
</html>