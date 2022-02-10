<?php 
include_once 'loginController.php';
include_once 'registerController.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script
      src="https://kit.fontawesome.com/dada163284.js" crossorigin="anonymous"
    ></script>

    <title>Document</title>

    <link rel="stylesheet" href="account.css" />
  </head>
  <body>
    <div class="container">
      <div class="container-form">
        <div class="login-signup">
          <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="login-form">
            <h2 class="title" style="font-family: 'Poppins', sans-serif;">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" pattern=".{8,15}"required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" pattern="^[A-Z]+[a-zA-Z]*\d{3}$" required/>
            </div>
            <input type="submit" value="Login" name="loginBtn" class="btn solid" />

            

           
          </form>

          <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="sign-up-form">
            <h2 class="title" style="font-family: 'Poppins', sans-serif;">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="name..." value="<?=$name?>" style="text-transform:capitalize" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="surname" placeholder="surname..." value="<?=$surname?>" style="text-transform: capitalize;" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="username..." value="<?=$username?>" pattern=".{8,15}" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  name="email" placeholder="email..." value="<?=$email?>" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="password..." value="<?=$password?>" pattern="^[A-Z]+[a-zA-Z]*\d{3}$" style="text-transform: capitalize" required/>
            </div>
            <input type="submit" value="register" name="registerBtn" class="btn solid" />

            

           
          </form>
        </div>
      </div>

      <div class="container-panel">
        <div class="panel left-panel">
          <div class="content">
            <h3 style="font-family: 'Poppins', sans-serif;">New here?</h3>
            <p style="font-family: 'Poppins', sans-serif;">Click here to become one of us!</p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="images/photo2.svg" class="image">
        </div>

        <div class="panel right-panel">
          <div class="content">
            <h3 style="font-family: 'Poppins', sans-serif;">One of us?</h3>
            <p style="font-family: 'Poppins', sans-serif;">Click here to login!</p>
            <button class="btn transparent" id="login-btn">Login</button>
          </div>

          <img src="images/photo1.svg" class="image">
        </div>
      </div>
    </div>

    <script src="account.js"></script>


  
</body>
</html>

