<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f4f6f9;
    }

    .container {
      width: 90%;
      max-width: 1000px;
      height: 600px;
      display: flex;
      background: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* LEFT SIDE */
    .login-section {
      width: 60%;
      padding: 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-section h1 {
      margin-bottom: 10px;
      color: #333;
    }

    .login-section p {
      margin-bottom: 30px;
      color: #777;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-size: 14px;
    }

    .input-group input {
      width: 100%;
      padding: 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #4a90e2;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      border: none;
      background: #2f271c;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #433828;
    }

    .extra-links {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
    }

    /* RIGHT SIDE */
    .image-section {
      width: 50%;
      background: url('assets/phinisi-login.jpg')
        center/cover no-repeat;
      position: relative;
    }

    .overlay {
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.4);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      padding: 40px;
      text-align: center;
    }

    .overlay h2 {
      font-size: 32px;
      line-height: 1.4;
    }

    /* RESPONSIVE */
    @media (max-width: 700px) {
      .container {
        flex-direction: column;
        height: auto;
      }

      .login-section {
        width: 100%;
        padding: 40px 30px;
      }

      .image-section {
        display: none;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- LEFT -->
    <div class="login-section">
      <h1>Selamat Datang</h1>
      <p>Silakan login ke akun anda</p>

      <form method="post" action="ceklogin.php">
        <div class="input-group">
          <label>Username</label>
          <input type="text" placeholder="Masukkan username" name="username" id="username">
        </div>

        <div class="input-group">
          <label>Password</label>
          <input type="password" placeholder="Masukkan password" name="password" id="password">
        </div>

        <input type="submit" value="Login" class="login-btn">
      </form>
    </div>

    <!-- RIGHT -->
    <div class="image-section">
      <div class="overlay">
        <h2>
          Temukan Keindahan di Sulawesi Selatan
        </h2>
      </div>
    </div>

  </div>

</body>
</html>