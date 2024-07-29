<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moozlogingen";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta ao banco de dados para verificar o usuário
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header('Location: cod.html'); // Redireciona para a página após login bem-sucedido
        exit;
    } else {
        $error = 'Usuário ou senha inválidos!';
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/901a12b8d6ca83323d7dd9a787d03650.png" type="image/x-icon">
  <title>Mooz Store • Login</title>
  <style>
      #particles-js {
          width: 100vw;
          height: 100vh;
          position: absolute;
          top: 0;
          left: 0;
          z-index: 0;
      }
  </style>
</head>
<body>
  <div id="particles-js"></div>
  <div class="open" id="open">
      <div class="title">
            <div>
               <div id="fora">
                  <h1>Mooz Store®</h1>
                  <p style="margin-top: -50px;">login</p>
                  <div class="loading" id="loading-opacity">
                  <div class="loading-real" id="54845" style="width: 0px;"></div>
               </div>
            </div>
               <div class="boxes" id="boxes" style="display: none;">
                  <div class="box">
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: rgba(0, 0, 0, 0.364);"></div>
                  </div>
                  <div class="box">
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: rgba(0, 0, 0, 0.364);"></div>
                  </div>
                  <div class="box">
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: rgba(0, 0, 0, 0.364);"></div>
                  </div>
                  <div class="box">
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: #ffffff;"></div>
                      <div style="background-color: rgba(0, 0, 0, 0.364);"></div>
                  </div>
              </div>
            </div>
         </div>
      </div>
    <div class="login-container" id="login-container">
        <div class="logo">
            <img class="circle" src="images/6944147a-2b0b-4aa4-ad55-2b863ea07f87.png" alt="Logo">
        </div>
        <form method="post" autocomplete="off" action="login.php">
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

  <img alt="" id="canvas" style="position: absolute; margin: -8px; pointer-events: none; top: 0px; left: 0px; height: 5px; width: 5px; border: 8px solid rgba(255, 255, 255, 0); border-radius: 100%; box-shadow:  rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(64, 64, 64) 0px 0px 0px 2px; z-index: 999;" src="images/Sem_Titulo-4.png" height="8">

  <script src="js/script.js"></script>
  <script src="js/particles.min.js"></script>
  <script>
      particlesJS("particles-js", {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#67B5E6"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 
