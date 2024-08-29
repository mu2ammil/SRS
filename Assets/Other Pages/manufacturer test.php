<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Request Testing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&display=swap" rel="stylesheet">

<style>
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
width:220px;

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
    <div id="content" class="p-4 p-md-5 pt-5">
    <br>
    <div class="hover container" id="div1">
        <h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">Send Products</h2>
        </div>
<br>
        
        <form action="dataaccess.php" method="post">
        <!--input class="btn btn-primary" type="submit" name="btn_sendAll" value="SEND ALL" style=" background: #74ebd5; 
  background: -webkit-linear-gradient(to bottom, #74ebd5, #acb6e5); 
  background: linear-gradient(to bottom, #74ebd5, #acb6e5);" /-->
        </form>


        <table class="table container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product NAME</th>
            
            <th>Send For Testing</th>
        </tr>
    </thead>

    <tbody>
<?php 
include ('connect.php');
$res = mysqli_query($con,"SELECT * FROM products WHERE prod_status = 'Untested'");
while($row = mysqli_fetch_array($res))
{
?>
<tr>
<td><?=$row['prod_id']?></td>
<td><?=$row['prod_name']?></td>

<td><form action="dataaccess.php?id=<?=$row["prod_id"]?>" method="post"><input class="btn btn-info" type="submit" name="btn_sendProduct" value="SEND"/></form></a></td>
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

