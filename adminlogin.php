<?php
session_start();
ob_start();
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
    width: 97%;
    padding: 15px;
    font-family: 'Prompt', sans-serif;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #FBB100;
    transition: 0.3s;
}
.btn:hover {
    width: 100%;
    color: white;
    background: #E23949;
}

</style>
<body>
<br><br><br><br><br>
<div class="container text-center">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div id="loginbox" style="margin-top:-15px;">               
        <div class="panel-heading">
			<br>
            <img src="logogoAsset 2.png" width="500">
		</div>     
		<br>
        <div style="padding-top:20px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
        <form action="adminlogin.php" method= "POST"  class="form-horizontal" role="form">                      
			<div style="margin-bottom: 25px" class="input-group">
				 <span class="input-group-addon"></span>
				<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
			</div>
									
			<div style="margin-bottom: 25px" class="input-group">
				 <span class="input-group-addon"></span>
				 <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
			 </div>
										
			<div style="margin-top:10px" class="form-group">
				<div class="col-sm-12 controls">
					<input type="submit" id="btn-login" value="LOGIN" class="btn btn-danger" style="font-size:18px">
				</div>
			</div>  
        </form> 
</div>
<div class="col-md-3"></div>
</div>
</div>    
<?php

if(isset($_POST["username"]) && isset ($_POST["password"]) ){

$username = $_POST["username"];
$password = $_POST["password"];

include("database.php");
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM adminn WHERE user_admin= :username AND pass_admin= :password";
$q = $pdo->prepare($sql);
$q->bindParam(':username', $username, PDO::PARAM_STR);
$q->bindParam(':password', $password, PDO::PARAM_STR);
$q->execute();

$total = $q-> rowCount();

if ($total) {
    $_SESSION['admin'] = $username;
	header("Location: ./admincome.php");
    echo "<script type='text/javascript'>alert('Login Success :)')</script>";
    ob_end_flush();
}

else { echo '<span style="font-size:20px; font-weight:600; color:#D11111">Incorrect username or password</span>';

}
}
?>
</body>
</html>