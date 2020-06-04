<?php
error_reporting(0);
//Setting session start
session_start();

$total=0;

//Database objConnect, replace with your objConnect string.. Used PDO
$conn = new PDO("mysql:host=localhost;dbname=Hanabi;charset=utf8", 'root', '');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//get action string
$action = isset($_GET['action'])?$_GET['action']:"";

//Add to cart
if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {
	
	//Finding the product by code
	$query = "SELECT * FROM festival WHERE fest_id=:fest_id";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('fest_id', $_POST['fest_id']);
	$stmt->execute();
	$festival = $stmt->fetch();
	
	$currentQty = $_SESSION['festival'][$_POST['fest_id']]['qty']+1; //Incrementing the product qty in cart
	$_SESSION['festival'][$_POST['fest_id']] =array('qty'=>$currentQty,'name'=>$festival['fest_name'],'image'=>$festival['fest_img1'],'price'=>$festival['price']);
	$festival='';
	header("Location:basket.php");
}

//Empty All
if($action=='emptyall') {
	$_SESSION['festival'] =array();
	header("Location:shopping-cart1.php");	
}

//Empty one by one
if($action=='empty') {
	$fest_id = $_GET['fest_id'];
	$festivals = $_SESSION['festival'];
	unset($festivals[$fest_id]);
	$_SESSION['festival']= $festivals;
	header("Location:shopping-cart1.php");	
}
 
 //Get all Products
$query = "SELECT * FROM festival";
$stmt = $conn->prepare($query);
$stmt->execute();
$festivals = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP registration form</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width:600px;">
  <?php if(!empty($_SESSION['festival'])):?>
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid pull-left" style="width:300px;">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Shopping Cart</a> </div>
    </div>
    <div class="pull-right" style="margin-top:7px;margin-right:7px;"><a href="shopping-cart1.php?action=emptyall" class="btn btn-info">Empty cart</a></div>
  </nav>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Actions</th>
      </tr>
    </thead>
    <?php foreach($_SESSION['festival'] as $key=>$festival):?>
    <tr>
      <td><img src="<?php print $festival['image']?>" width="50"></td>
      <td><?php print $festival['name']?></td>
      <td>$<?php print $festival['price']?></td>
      <td><?php print $festival['qty']?></td>
      <td><a href="shopping-cart1.php?action=empty&fest_id=<?php print $key?>" class="btn btn-info">Delete</a></td>
    </tr>
    <?php $total = $total+($festival['price']*$festival['qty']);?>
    <?php endforeach;?>
    <tr><td colspan="5" align="right"><h4>Total:$<?php print $total?></h4></td></tr>
  </table>
  <?php endif;?>
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Products</a> </div>
    </div>
  </nav>
  <div class="row">
    <div class="container" style="width:600px;">
      <?php foreach($festivals as $festival):?>
      <div class="col-md-4">
        <div class="thumbnail"> <img src="<?php print $festival['fest_img1']?>" alt="Lights">
          <div class="caption">
            <p style="text-align:center;"><?php print $festival['fest_name']?></p>
            <p style="text-align:center;color:#04B745;"><b>$<?php print $festival['price']?></b></p>
            <form method="post" action="shopping-cart1.php?action=addcart">
              <p style="text-align:center;color:#04B745;">
                <button type="submit" class="btn btn-warning">Add To Cart</button>
                <input type="hidden" name="fest_id" value="<?php print $festival['fest_id']?>">
              </p>
            </form>
            <a href="ticket.php" class="btn">Get Ticket</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</div>
</body>
</html>