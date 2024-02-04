<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login Form</title>
</head>
<body>
  <div class="login-container">
    <form id="loginForm" action="index.php" method="post">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login"/>
    </form>
   
  </div>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];

      
      if ($username == "user" && $password == "pass") {
        header("Location: dashbord.php");
      } else {
        $msg= "Invalid username or password.";
?>
    
<div id="response"><?php echo $msg ?></div>
  
<?php
      }
    } else {
      echo "Username and password must be set.";
    }
  }
?>

<?php
 include_once "footer.php"
?>
</body>
</html>
