<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="jquery.js"></script>
  <title>Perpustakaan Web | MASUK</title>
</head>

<body>
  <form class="container" action="konek_login.php" method="POST">
    <h2>MASUK</h2>
    <div class="login-box">
      <i class="fa fa-user"></i>
      <input type="text" placeholder="Nama Pengguna" name="username" required title="MASUKIN DULU LOL INPUTNYA" />
    </div>
    <div class="login-box">
      <i class="fa fa-envelope-open-text"></i>
      <input type="text" placeholder="Email" name="email" required title="MASUKIN DULU LOL INPUTNYA" />
    </div>
    <div class="login-box">
      <i class="fa fa-lock"></i>
      <input type="password" placeholder="Kata Sandi" id="password" name="password" required
        title="MASUKIN DULU LOL INPUTNYA" />
      <div class="show-hide">
        <i class="fa fa-eye-slash" id="eyeicon"></i>
      </div>
    </div>
    <button type="submit" name="masuk" class="btn">MASUK</button>
    <div class="btn-login">
      <p>
        Belum Mempunyai Akun?
        <a href="register.php">Daftar</a>
      </p>
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