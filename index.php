<?php
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Turn The Light On With Japan</title>
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
    .navbar {
        background-color: rgba(255, 255, 255, 0)! important;
    }
    .navbar .navbar-nav {
        text-align: center;
    }
    .navbar .navbar-nav li a {
        letter-spacing: 2px;
        font-family: 'Prompt', sans-serif;
        color: white! important;
        transition: 0.2s;
    }
    .navbar .navbar-nav li a:hover {
        color: #D5D5D5! important;
    }
    .navbar .navbar-collapse {
        text-align: center;
    }
    .navbar-toggler {
        border: 0;
        background-color: #E0D8C8;
    }
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
/* Add some content at the bottom of the video/page */

.form_input {
    background: whitesmoke;
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
}
.form_input:focus {
    background: rgba(170, 170, 170, 0.3);
}
h3 {
    color: #0A1B44;
    letter-spacing: 2px;
}
.btn {
    display: block;
    width: 100%;
    padding: 15px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #FBB100;
    transition: 0.3s;
}
.btn:hover {
    color: white;
    background: #E23949;
}
.bg-video {
    /* background: rgba(10, 27, 68, 0.521); */
    background: rgba(84, 64, 163, 0.301);
    /* background: rgba(84, 64, 163, 0.164); */
    width: 115vw;
    height: 1000px;
    position: absolute;
    top: -20%;
    left: -15%;
}
.input{
    border: 0;
    background: rgba(255, 255, 255, 0);
    color: white;
    letter-spacing: 2px;
    font-family: 'Prompt', sans-serif;
    font-size: 11pt;
    transition: 0.2s;
}
.input:hover {
    color:#D5D5D5;
}

/* fade,move logo */
.animated {
    -webkit-animation: animatelogo 3s 1;
    animation: animatelogo 3s 1;
    /* animation: move 3s;
    -webkit-animation: move 3s; */
}
         
@-webkit-keyframes animatelogo {
    0% {
        opacity: 0;
        margin-top: 15%;
    }
    100% {
        opacity: 1;
        margin-top: 0%;
    }
}
         
@keyframes animatelogo {
    0% {
        opacity: 0;
        margin-top: 15%;
    }
    100% {
        opacity: 1;
        margin-top: 0%;
    }
}

h2 {
    color: #0A1B44;
    letter-spacing: 2px;
    font-family: 'Anton', sans-serif;
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    display: block;
}

/* sidebar */
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #54469B;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 30px;
  margin-left: 0;
}

@media screen and (max-height: 450px;) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.form-control {
    width: 50px;
    padding: 25px;
}

#myDiv {
  display: none;
  text-align: center;
}

/* search */
.search {
    width: 40%;
    height: 50px;
    background: rgba(255, 255, 255, 0.767);
    border-radius: 5px;
    padding-left: 15px;
    margin-left: 290px;
    border: 0;
}
.btnn {
    float: right;
    margin-right: 305px;
    width: 50px;
    display: block;
    padding: 14px;
    padding-left: 12px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    border-radius: 5px;
    color: white;
    background: #E23949;
    transition: 0.3s;
}
.btnn:hover {
    color: white;
    background: #FBB100;
}


</style>

<video autoplay loop id="myVideo" muted plays-inline>
    <source src="firework2.mp4" type="video/mp4">
</video>
<div class="bg-video"></div>
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php"><img src= "logogoAsset 2.png" height="45"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <form action="fest_island1.php" method="POST">
            <input class="input" type="submit" name="Festival" value="FESTIVAL">&nbsp;
        </form>
        <form action="ticket1.php" method="POST">
		    <input class="input" type="submit" name="Hokkaido" value="HOKKAIDO">&nbsp;
		    <input class="input" type="submit" name="Honshu" value="HONSHU">&nbsp;
		    <input class="input" type="submit" name="Shikoku" value="SHIKOKU">&nbsp;
		    <input class="input" type="submit" name="Kyushu" value="KYUSHU">&nbsp;
        </form>
        <form action="aboutus11.php" method="POST">
            <input class="input" type="submit" name="About" value="ABOUT">&nbsp;
        </form>
    </ul>
    <ul class="navbar-nav mr-sm-0">
        <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#loginForm" onclick="openFormLogin()">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#signupForm" onclick="openFormSignup()">Sign Up</a>
        </li>
    </ul>
  </div>
</nav>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-12">
        <br><br><br><br><br>
            <img src= "logogoAsset 2.png" class="animated" width="90%">
            <br>

            <!-- แบบฟอร์มสำหรับการค้นหาข้อมูล -->
            <form action="searcher.php" method="get">
	            <span><input type="text" name="terms" size="20px" class="search animated" placeholder="search...">
                <input class="btnn btn-default animated" type="submit" name="searcher" value="GO"></span>
            </form>
        </div>
    </div>
</div>
<br><br>

<!-- login form sidebar -->
<div id="mylogin" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeFormLogin()">&times;</a>
  <br>
  <h2>LOGIN</h2>
  <form action="index.php" method= "POST"  class="form-horizontal" role="form">                      
	<div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"></span>
		<input id="login-username" type="text" class="form-control" name="email" placeholder="Email">                                        
	</div>
									
	<div style="margin-bottom: 25px" class="input-group">
		<span class="input-group-addon"></span>
		<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
	</div>
										
    <div style="margin-top:10px" class="form-group">
		<div class="col-sm-12 controls">
		    <input type="submit" id="btn-login" name="login" value="LOGIN" class="btn btn-danger" style="font-size:18px">
		</div>
    </div>  
</form> 
</div>

<!-- sign up form sidebar -->
<div id="mysignup" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeFormSignup()">&times;</a>
  <br>
  <h2>SIGN UP</h2>
  <form action="header1.php" method= "POST"  class="form-horizontal" role="form">                      
	<div style="margin-bottom: 25px" class="input-group <?php echo !empty($firstnameError)?'error':'';?>">
        <span class="input-group-addon"></span>
        <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo !empty($firstname)?$firstname:'';?>">
        <?php if (!empty($firstnameError)): ?>
        <span class="help-inline"><?php echo $firstnameError;?></span>
        <?php endif; ?>                                      
	</div>
									
	<div style="margin-bottom: 25px" class="input-group <?php echo !empty($lastnameError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo !empty($lastname)?$lastname:'';?>">
        <?php if (!empty($lastnameError)): ?>
        <span class="help-inline"><?php echo $lastnameError;?></span>
        <?php endif; ?>   
    </div>
    
    <div style="margin-bottom: 25px" class="input-group <?php echo !empty($emailError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
        <?php if (!empty($emailError)): ?>
        <span class="help-inline"><?php echo $emailError;?></span>
        <?php endif; ?>
    </div>
    
    <div style="margin-bottom: 25px" class="input-group <?php echo !empty($passwordError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo !empty($password)?$password:'';?>">
        <?php if (!empty($passwordError)): ?>
        <span class="help-inline"><?php echo $passwordError;?></span>
        <?php endif; ?>
    </div>
    
    <div style="margin-bottom: 25px" class="input-group <?php echo !empty($confirmpasswordError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="password" class="form-control" name="comfirmpassword" placeholder="Confirm Password" value="<?php echo !empty($confirmpassword)?$confirmpassword:'';?>">
        <?php if (!empty($confirmpasswordError)): ?>
        <span class="help-inline"><?php echo $confirmpasswordError;?></span>
        <?php endif; ?>
    </div>
    
    <div style="margin-bottom: 25px" class="input-group <?php echo !empty($telError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="text" class="form-control" name="tel" placeholder="Telephone Number" value="<?php echo !empty($tel)?$tel:'';?>">
        <?php if (!empty($telError)): ?>
        <span class="help-inline"><?php echo $telError;?></span>
        <?php endif; ?>
    </div>
    
    <div style="margin-bottom: 25px" class="input-group <?php echo !empty($addressError)?'error':'';?>">
		<span class="input-group-addon"></span>
        <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo !empty($address)?$address:'';?>">
        <?php if (!empty($addressError)): ?>
        <span class="help-inline"><?php echo $addressError;?></span>
        <?php endif; ?>
    </div>
										
    <div style="margin-top:10px" class="form-group">
		<div class="col-sm-12 controls">
		    <input type="submit" id="btn-login" name="signup" value="SIGN UP" class="btn btn-danger" style="font-size:18px">
		</div>
    </div>  
</form> 
</div>

<?php
// ส่วน login
if (isset($_POST['login'])) {
if(isset($_POST["email"]) && isset($_POST["password"])){

$email = $_POST["email"];
$password = $_POST["password"];

include("database.php");
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM member WHERE email= :email AND password= :password";
$q = $pdo->prepare($sql);
$q->bindParam(':email', $email, PDO::PARAM_STR);
$q->bindParam(':password', $password, PDO::PARAM_STR);
$q->execute();

$total = $q-> rowCount();

if ($total) {
    $_SESSION['member'] = $email;
    echo "<script type='text/javascript'>alert('Login Success :)')</script>";
    header("Location: ./home_login.php");
}

else { 
    echo "<script type='text/javascript'>alert('Incorrect email or password')</script>";
}
}
}

// ส่วน sign up
if (isset($_POST['signup'])){
    require('database.php');	
	
    if ( !empty($_POST)) {
        // keep track validation errors
        $firstnameError = null;
        $lastnameError = null;
        $emailError = null;
        $passwordError = null;
        $comfirmpasswordError = null;
        $telError = null;
        $addressError = null;
         
        // keep track post values
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $comfirmpassword = $_POST['comfirmpassword'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
         
        // validate input
        $valid = true;
        if (empty($firstname)) {
            $firstnameError = 'Please enter firstname';
            $valid = false;
        }
         
        if (empty($lastname)) {
            $lastnameError = 'Please enter lastname';
            $valid = false;
        } 

        if (empty($email)) {
            $emailError = 'Please enter email';
            $valid = false;
        } 

        if (empty($password)) {
            $passwordError = 'Please enter password';
            $valid = false;
        } 

        if (empty($comfirmpassword)) {
            $comfirmpasswordError = 'Please enter comfirm password';
            $valid = false;
        } 

        if (empty($tel)) {
            $telError = 'Please enter telephone number';
            $valid = false;
        } 
        if (empty($address)) {
            $festlocationError = 'Please enter address';
            $valid = false;
        }
    }
    
    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO member (firstname,lastname,email,password,tel,address) values(?, ?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($firstname,$lastname,$email,$password,$tel,$address));
        Database::disconnect();
        header("Location: index.php");
        echo "<script type='text/javascript'>alert('Sign Up Success :)')</script>"; 
        ob_end_flush();
    }
}
?>

<!-- sidebar ล็อคอิน -->
<script>
function openFormLogin() {
  document.getElementById("mylogin").style.width = "400px";
}

function closeFormLogin() {
  document.getElementById("mylogin").style.width = "0";
}

function openFormSignup() {
  document.getElementById("mysignup").style.width = "400px";
}

function closeFormSignup() {
  document.getElementById("mysignup").style.width = "0";
}
</script>

<!-- loading -->
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>  
</div>
</body> 
</html>