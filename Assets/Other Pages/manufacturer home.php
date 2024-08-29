<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Manufacturer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&display=swap" rel="stylesheet">
        
    <style>
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 82px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 15px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.hover{
  background:white;
  width:100%;
}

.hover:hover{
  background: #74ebd5; 
  background: -webkit-linear-gradient(to right, #74ebd5, #acb6e5); 
  background: linear-gradient(to right, #74ebd5, #acb6e5);
border-radius:20px;
  transition: width 2s;
width:320px;

}
#div1{
  transition-timing-function: ease;
}
</style>

  </head>
  <body>
<?php
    include ('manufacturer sidenav.php');
?>
<form action="manufacturer home.php" method="post">
    <div class="wrap">
   <div class="search">
      <input type="text" name="search" class="searchTerm" placeholder="What are you looking for?">
      <input type="submit" value="search" name="btnSearch" class="searchButton">
   </div>
</div>
</form>
<br><br><br>
    <div id="content" class="p-4 p-md-5 pt-5">
    <br><br><br><br>
    <div class="hover container" id="div1">
        <b><h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">Hello Manufacturer</h2></b>
        </div>
        <br>

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
if(isset($_POST['btnSearch']))
{
  $searchq = $_POST['search'];
  if($searchq == !null)
  {
?>
<?php
    $output = "";
    $search = $_POST['search'];
    $query = mysqli_query($con , "SELECT * FROM products WHERE prod_id LIKE '%$search%' OR prod_name LIKE '%$search%' OR prod_status LIKE '%$search%'");
    $count = mysqli_num_rows($query);
    if($count == 0)
    {
      $output = 'There Was No Search Results';
      echo $output;
    }
  else
  {
      while($row = mysqli_fetch_array($query))
      {
?>
  
  <tr>
    <td><?= $row['prod_id'] ?></td>
    <td><?=$row['prod_name']?></td>
    
    <td><?=$row['prod_status']?></td>
    </tr>
<?php
      }
    }
  }
  else
  {
    $res = mysqli_query($con,"SELECT * FROM products WHERE prod_status = 'Untested' "); 
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
  }
  }
else
{ 
  $res = mysqli_query($con,"SELECT * FROM products WHERE prod_status = 'Untested' "); 
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

