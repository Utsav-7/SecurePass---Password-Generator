<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <style>
        .success-message {
          background-color: #DFF2BF;
          border: 1px solid #4F8A10;
          color: #4F8A10;
          padding: 10px;
          margin-bottom: 20px;
          text-align: center;
        }

        .error-message {
          background-color: white;
          border: 1px solid #4F8A10;
          color: red;
          font-size: 15px;
          padding: 10px;s
          margin-bottom: 20px;
          text-align: center;
        }
    </style>
</head>
<body>

<?php
// Database connection (same as in register.php)
// Database connection
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "password_generator";

$conn = mysqli_connect($host, $db_user, $db_password, $db_name);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Check if username and password match the database records
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 1) {
    echo "Login successful";
    // Perform any desired actions after successful login
    header("Location: HomePage.html");
    exit();
  } else {
    echo "Invalid username or password";
  }
}

mysqli_close($conn);
?>

    <div id="video-background">
        <video autoplay muted loop>
          <source src="animation-1.mp4" type="video/mp4">
        </video>
    </div>
    <center>
        <div class="flexbox-container" style="padding-top: 100px;">
            <div class="flexbox-item fixed">
              <div class="box">
                <h2 style="font-size: 40px;font-weight: 900;"><b>SecurePass</b></h2><hr>
                <h3 style="font-size: 40px;font-weight: 900;"><b>Login</b></h3>
                <form id="logfrm" method="post" action="HomePage.html">    
                    <input type="text" name="username" required placeholder="Username"><br><br>
                    <input type="password" name="password" required placeholder="Password"> <br>

                    <button type="submit" value="Login" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button class="btn btn-primary"><a href="index.html" style="color: white;">Back</a></button>
                </form>
                <a href="register.php" >Not an account ?</a>
              </div>
            </div>
        </div>
    </center>  
    
    <footer>
      <p style="color:white; text-align: center;margin-top: 200px;">&copy; 2023 SecurePass. All rights reserved.</p>
    </footer>
</body>
</html>

