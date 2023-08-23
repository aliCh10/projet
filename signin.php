

<!DOCTYPE html>
<html lang="en">
<head>
    <title>signin</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="float-container">
        <div class="float-child">
          <div class="background">
            <img class="image-style" src="img/F23.png.jpg">
          </div>
        </div>
        
        <div class="float-child">
          <div class="formulaire">

            <form method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data">>
                <input type="email" class="input-field" placeholder="enter email" name="email" required>
               <input type="password" class="input-field" placeholder="enter password" name="password" required>
               <button type="submit" class="sumbit-btn" name="login"  value="login">LOGIN</button>
           </form>
           <a class="links" href="signup.php">create account</a>
           <a class="links" href="body.html">Go to home page</a>
          </div>
        </div>
      </div>
</body>
</html>
<?php
require 'conn.php';
require 'users.php'; 
if(isset($_POST['login'])){
  $pswd=$_POST['password'];
  $email=$_POST['email'];
  
  $sql = "SELECT * FROM users WHERE mail = :email and password = :password";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(':email' => $email, ':password' => $pswd));
  var_dump($stmt);
  
  if ($stmt->rowCount() > 0) {
    session_start();
      header("location:login.php");
  } else {
      echo "Invalid email or password";
  }
}
?>
