<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="jquery.js"></script>
  <title>Perpustakaan Web | DAFTAR</title>
</head>

<body>
  <form action="konek_register.php" method="POST">
    <div class="container">
      <h2>DAFTAR</h2>
      <div class="login-box">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="Nama Pengguna" name="username" />
      </div>
      <div class="login-box">
        <i class="fa fa-envelope-open-text"></i>
        <input type="text" placeholder="Email" name="email" />
      </div>
      <div class="login-box">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Kata Sandi" id="password" name="password" />
        <div class="show-hide">
          <i class="fa fa-eye-slash" id="eyeicon"></i>
        </div>
      </div>
      <div class="login-box">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Konfirmasi Kata Sandi" id="password" name="cppassword" />
        <div class="show-hide2">
          <i class="fa fa-eye-slash" id="eyeicon"></i>
        </div>
      </div>
      <button type="submit" name="daftar" class="btn">DAFTAR</button>
      <div class="btn-login">
        <p>
          Sudah Mempunyai Akun?
          <a href="login.php">Masuk</a>
        </p>
      </div>
    </div>
  </form>
  <script>
  let eyeicon = document.getElementById("eyeicon");
  let password = document.getElementById("password");

  eyeicon.onclick = function() {
    if (password.type == "password") {
      password.type = "text";
      eyeicon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      password.type = "password";
      eyeicon.classList.replace("fa-eye", "fa-eye-slash");
    }
  };
  </script>

</body>

</html>