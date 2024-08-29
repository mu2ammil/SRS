<?php
if(isset($_SESSION['username']))
{
  
}
else
{
    header("Location: \SRS/login.php");
}
?>
  <link rel="stylesheet" href="css/sidebar.css">
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" style="background-color: #6bbfed;background-image: linear-gradient(135deg, #6bbfed 0%, #0074dd 100%);">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary" style="   background: #74ebd5; 
  background: -webkit-linear-gradient(to bottom, #74ebd5, #acb6e5); 
  background: linear-gradient(to bottom, #74ebd5, #acb6e5);">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image:url(images/Others/back2.jpg);">
        <div class="user-logo">
          <div class="img" style="background-image: url(images/Others/logo.jpg);"></div>
          <h3 style="font-weight:1000;letter-spacing:2px;font-size:25px;font-family:Arial;  text-shadow: 4px 2px black;">Lab</h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="lab home.php"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li>
          <a href="lab tested.php"><span class="fa fa-plus mr-3"></span> Tested Products</a>
        </li>
        <li>
          <a href="lab test.php"><span class="fa fa-angle-double-right mr-3"></span> Testing</a>
        </li>
        <li>
          <a href="lab results.php"><span class="fa fa-undo mr-3"></span> Results</a>
        </li>
        <li>
        <a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Log Out</a>
        </li>
      </ul>
    </nav>