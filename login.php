<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assets/Other Pages/css/style.css" />
    <title>SRS Login</title>
  </head>

<?php

?>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="Assets/Other Pages/dataaccess.php" class="sign-in-form" method="POST">
            <h2 class="title">Manufacturer Login</h2>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="ManufacturerPassword" maxlength="13" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="btnLoginManufacturer"/><br><br>

            <h2 class="title">Lab Login</h2>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="LabPassword"  maxlength="6"/>
            </div>
            <input type="submit" value="Login" class="btn solid"  name="btnLoginLab" />
           
          </form>
          <form action="Assets/Other Pages/dataaccess.php" class="sign-up-form" method="POST">
            <h2 class="title">Admin Login</h2>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="AdminPassword"  maxlength="5" />
            </div>
            <input type="submit" class="btn" value="Login"  name="btnLoginAdmin" />
            
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Admin?</h3>
            <p>
              If you are the admin Sign In From the Button Down Below!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Admin Login
            </button>
          </div>
          <img src="Assets/Other Pages/images/Index/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Manufactuner or Lab Staff?</h3>
            <p>
              If you are the Manufacturer or the lab staff Login from the button below!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Manufacturer or Lab Login
            </button>
          </div>
          <img src="Assets/Other Pages/images/Index/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {container.classList.add("sign-up-mode");});

sign_in_btn.addEventListener("click", () => {container.classList.remove("sign-up-mode");});

    </script>
  </body>
</html>
