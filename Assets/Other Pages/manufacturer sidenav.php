<?php
if (isset($_SESSION['username'])) {
?>
  <link rel="stylesheet" href="css/sidebar.css">
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" style="background-color: #6bbfed;background-image: linear-gradient(135deg, #6bbfed 0%, #0074dd 100%);">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary" style="background-color: #6bbfed;background-image: linear-gradient(135deg, #6bbfed 0%, #0074dd 100%);">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image:url(images/Others/back.jpg);">
        <div class="user-logo">
          <div class="img" style="background-image: url(images/Others/logo.jpg);"></div>
          <h3 style="font-weight:700;letter-spacing:1px;font-size:22px;font-family:Sans-serif	; text-shadow: 4px 2px black;">Manufacturer</h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="manufacturer home.php"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li>
          <a href="manufacturer add product.php"><span class="fa fa-plus mr-3"></span> Add Products</a>
        </li>
        <li>
          <a href="manufacturer test.php"><span class="fa fa-angle-double-right mr-3"></span> Request Testing</a>
        </li>
        <li>
          <a href="manufacturer revised.php"><span class="fa fa-undo mr-3"></span> Revised Products</a>
        </li>
        <li>
          <a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Log Out</a>
        </li>
      </ul>
    </nav>
  <?php
} else {
  header("Location: ../login.php");
}
  ?>