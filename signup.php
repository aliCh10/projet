
<!DOCTYPE html>
<html>
<head>
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<form method="post" enctype="multipart/form-data">
<body>
<div class="float-container">
    <div class="float-child">
        <div class="formulaire">
          <form>
              <input type="text" class="input-field" placeholder="user name" name="firstName"required>
              <input type="text" class="input-field" placeholder="user last name" name="lastName" required>
              <input type="tel" class="input-field" placeholder="phone number"  name="telephone" required>
              <input type="email" class="input-field" placeholder="enter email" name="mail" required>
             <input type="password" class="input-field" placeholder="enter password"  name="password" required>
             <button type="submit" class="sumbit-btn" value="connexion" name="aj">JOIN US</button>
             </form>
             <a class="links" href="signin.php">Already have an account</a>
             <a class="links" href="body.html">Go back to home page</a>
       </div>
    </div>
    <div class="float-child">
        <div class="background">
            <img class="image-style" src="img/F23.png.jpg">
        </div>
    </div>
</div>
<?php
    require 'users.php';
    $U=new users(null,"","","","","","","","");

    if (isset($_POST['aj'])) {
        $U->firstName=$_POST['firstName'];
        $U->lastName=$_POST['lastName'];
        $U->adresse="";
        $U->telephone=$_POST['telephone'];
        $U->mail=$_POST['mail'];
        $U->password=$_POST['password'];
        $U->type="";
        $U->connected="";
        $U->insertion($pdo);

    }
      ?>

</body>
</html>