<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="logo.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background: url(bg.png) no-repeat 50% fixed / cover;
    }
    .btn {
    display: inline-block;
    width: 20%;
    padding: 15px;
    font-family: 'Prompt', sans-serif;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #E23949;
    transition: 0.3s;
}
.btn:hover {
    width: 21%;
    color: white;
    background: #FBB100;
}
p {
    font-family: 'Prompt', sans-serif;
    color: white;
    font-size: 20pt;
}
</style>
<body>
<?php
if (isset($_SESSION['admin'])) {
    $data=$_SESSION['admin'];
?>
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
        <br><br><br><br><br><br>
    <img src="logogoAsset 2.png" width="500"><br><br>
    <p>Welcome Admin : <?php echo $data;?></p><br> 
     <a class="btn" href="adminshow.php" role="button"  style="font-size:18px">Festival Database &raquo;</a><br><br>
        </div>
    </div>
</div>
<?php
}

else { echo '<center><span style="font-size:20px; font-weight:600; color:#D11111">Restricted area. Only admins can access it.</span></center>';}
?>
</body>
</html>