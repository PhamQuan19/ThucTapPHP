<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <style type="text/css">
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}

.flex {
  display: flex;
  align-items: center;
}

.container {
  padding: 0 15px;
  min-height: 100vh;
  justify-content: center;
  background: #f0f2f5;
}

.facebook-page {
  justify-content: space-between;
  max-width: 1000px;
  width: 100%;
}

.facebook-page .text {
  margin-bottom: 90px;
}

.facebook-page h1 {
  color: #1877f2;
  font-size: 4rem;
  margin-bottom: 10px;
}

.facebook-page p {
     font-size: 1.75rem;
    white-space: nowrap;
    padding-left: 26px;
    width: 484px;
    text-wrap: revert;
}

form {
  display: flex;
  flex-direction: column;
  background: #fff;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1),
    0 8px 16px rgba(0, 0, 0, 0.1);
  max-width: 400px;
  width: 100%;
}

form input {
  height: 55px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-bottom: 15px;
  font-size: 1rem;
  padding: 0 14px;
}

form input:focus {
  outline: none;
  border-color: #1877f2;
}

::placeholder {
  color: #777;
  font-size: 1.063rem;
}

.link {
  display: flex;
  flex-direction: column;
  text-align: center;
  gap: 15px;
}

.link .login {
  border: none;
  outline: none;
  cursor: pointer;
  background: #1877f2;
  padding: 15px 0;
  border-radius: 6px;
  color: #fff;
  font-size: 1.25rem;
  font-weight: 600;
  transition: 0.2s ease;
}

.link .login:hover {
  background: #0d65d9;
}

form a {
  text-decoration: none;
}

.link .forgot {
  color: #1877f2;
  font-size: 0.875rem;
}

.link .forgot:hover {
  text-decoration: underline;
}

hr {
  border: none;
  height: 1px;
  background-color: #ccc;
  margin-bottom: 20px;
  margin-top: 20px;
}

.button {
  margin-top: 25px;
  text-align: center;
  margin-bottom: 20px;
}

.button a {
  padding: 15px 20px;
  background: #42b72a;
  border-radius: 6px;
  color: #fff;
  font-size: 1.063rem;
  font-weight: 600;
  transition: 0.2s ease;
}

.button a:hover {
  background: #3ba626;
}
</style>

  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">

        <div class="text">
          <img src="fb.svg" alt="Facebook" width="301">
          <h3>Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn. </h3>
        </div>

        <form action="#">
          <input type="email" placeholder="Email hoặc số điện thoại">
          <input type="password" placeholder="Mật khẩu">
          <div class="link">
            <button type="submit" class="login">Đăng nhập</button>
            <a href="#" class="forgot">Quên mật khẩu?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Tạo tài khoản mới</a>
          </div>
        </form>

      </div>
    </div>
  </body>
</html>