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
  	<title>Lab Testing</title>
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
<?php 
    include ('connect.php');
    $ID = $_GET['id'];
    $tests='';
    $res = mysqli_query($con,"SELECT tg.testing_id,tg.result,tg.testing_performed,tg.prod_id,p.prod_name,p.prod_quantity,p.prod_status FROM products p INNER JOIN testing tg ON p.prod_id = tg.prod_id WHERE p.prod_id = '$ID' ");
    while($row = mysqli_fetch_array($res))
    {
      $tests = explode(' ',$row['testing_performed']);
      $oneres = explode(' ',$row["result"]);
      $cou=count($tests)-1;
      $ID= $row["prod_id"];
?>
    <div class="hover" id="div1">
        <h2 class="mb-4" style="font-family: 'Big Shoulders Display', cursive;font-weight:400;letter-spacing:2px;text-align:center;">TESTING <?=$row['prod_name']?> </h2>
        </div>
        <br>
  <h3>PRODUCT NAME: </h3>
  <h5><?=$row['prod_name']?></h5>
  <h3>PRODUCT ID: </h3>
  <h5><?=$row['prod_id']?></h5>
  
  <h3>PRODUCT STATUS: </h3>
  <h5><?=$row['prod_status']?></h5>
  <table class="table container">
    <thead>
        <tr>
            <th>S.No</th>
            <!--th>TEST ID</th-->
            <th>TEST NAME</th>
            <th>PASS</th>
            <th>FAIL</th>
            <th>RESULT</th>
        </tr>
    </thead>
    <tbody>
<?php
  for ($x = 0; $x <= $cou; $x++) 
{
?> 
  <tr>
  <td>
  <?=$x+1?>
  </td>

  <!--td>
  <?=$tests[$x]?>
  </td-->

  <td>
  <?php
  $tid=$tests[$x];
  $tres = mysqli_query($con,"SELECT * FROM testing_types WHERE `type_id` = $tid ");
  while($trow = mysqli_fetch_array($tres))
    {
  ?>
<?=$trow["type_name"]?>
<?php
    }
?>
  </td>

  <td><form action="dataaccess.php?id=<?=$row["prod_id"]?>&testid=<?=$x?>" method="post"><input class="btn btn-info" type="submit" name="btn_PassProduct" value="Pass"/></form></td>
  <td><form action="dataaccess.php?id=<?=$row["prod_id"]?>&testid=<?=$x?>" method="post"><input class="btn btn-info" type="submit" name="btn_FailProduct" value="Fail"/></form></td>
  <td><?=$oneres[$x]?><td>
  </tr>

<?php
}
}       
?>

</tbody>
</table>
<form action="dataaccess.php?id=<?=$ID?>" method="post"><input class="btn btn-outline-info" type="submit" name="btn_done" value="DONE" style="width:100%;" /></form>
      </div>
		</div>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

