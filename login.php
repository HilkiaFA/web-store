<?php
session_start(); // Mulai session

// Koneksi ke database
$host = "localhost"; // Nama host
$username = "rajuhanip"; // Nama pengguna database
$password = "rajuhanip"; // Password database
$database = "db_kopsis"; // Nama database

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
}

// Proses login
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM login WHERE email='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header('Location: index.html'); // Redirect ke halaman dashboard
  } else {
    echo "Username atau password salah";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" type="text/css" href="php.css">
</head>
<body>
  <table align="center">
      <tr>
          <td><h1 class="h">Form Login</h1></td>
        </tr>
    <tr>
      <td><form method="post" action="login.php"></td>
      </tr>
      <tr>
        <td><label class="u">Username:</label><br></td>
      </tr>
      <tr>
       <td> <input type="text" class="pl" name="username" required><br></td>
       <tr>
            <td> <label class="v">Password:</label><br></td>
          </tr>
           <tr> 
            <td><input type="password" class="lp" name="password" required><br><br></td>
          </tr>
          <tr> 
            <td><input type="submit" class="sub" name="login" value="Login"></td>
           </tr>
         </tr>
       </table>
</body>
</html>