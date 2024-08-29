<?php
session_start();
if(isset($_SESSION['username']))
{

}
else
{
    header("Location: \SRS/login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Lab Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&display=swap" rel="stylesheet">
        
<style>
.hover
{
  background:white;
  width:100%;
}
.hover:hover
{
  background: #74ebd5; 
  background: -webkit-linear-gradient(to right, #74ebd5, #acb6e5); 
  background: linear-gradient(to right, #74ebd5, #acb6e5);
  border-radius:20px;
  transition: width 2s;
  width:340px;
}
#div1
{
  transition-timing-function: ease;
}
</style>

  </head>
  <body>
    <?php
    include ('lab sidenav.php');
    ?>
    <div id="content" class="p-4 p-md-5 pt-5">
    <br>
    <div class="hover container" id="div1">
        <h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">RESULTS</h2>
        </div>
        <br>
        <div class="hover container" id="div1">
        <h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">Passed Products</h2>
        </div>

<table class="table container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product NAME</th>
            
            <th>Status</th>
            
        </tr>
    </thead>
    <tbody>
<?php 
include ('connect.php');
$res = mysqli_query($con,"SELECT * FROM products WHERE prod_status='Pass'");
while($row = mysqli_fetch_array($res))
{
?>
  <tr>
  <td><?= $row['prod_id'] ?></td>
  <td><?=$row['prod_name']?></td>
  
  <td><?=$row['prod_status']?></td>
  </tr>
<?php
}       
?>
   </tbody>
</table>
<div class="hover container" id="div1">
<h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">Failed Products</h2>
</div>
<table class="table container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product NAME</th>
            
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
<?php 
include ('connect.php');
$res = mysqli_query($con,"SELECT * FROM products WHERE prod_status='Fail'");
while($row = mysqli_fetch_array($res))
{
?>
  <tr>
  <td><?= $row['prod_id'] ?></td>
  <td><?=$row['prod_name']?></td>
 
  <td><?=$row['prod_status']?></td>
  </tr>
<?php
}       
?>
   </tbody>
</table>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

