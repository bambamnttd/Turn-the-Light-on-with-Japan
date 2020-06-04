<?php
session_start();
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
    .navbar .navbar-brand {
        font-family: 'Prompt', sans-serif;
        color: #E0D8C8! important;
        text-align: center;
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
h3 {
    color: #0A1B44;
    letter-spacing: 2px;
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
input{
    border: 0;
    background: rgba(255, 255, 255, 0);
    color: white;
    letter-spacing: 2px;
    font-family: 'Prompt', sans-serif;
    font-size: 11pt;
    transition: 0.2s;
}
input:hover {
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

/* dropdown */

.dropbtn {
    letter-spacing: 2px;
    font-family: 'Prompt', sans-serif;
    font-size: 12pt;
    transition: 0.2s;
    background-color: rgba(255, 255, 255, 0);
    color: white;
    padding: 14px;
    border: none;
    cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
font-family: 'Prompt', sans-serif;
  display: none;
  text-align: left;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgba(255, 255, 255, 0);
}

/* search */
.search {
    width: 40%;
    height: 50px;
    background: rgba(255, 255, 255, 0.767);
    border-radius: 5px;
    padding-left: 15px;
    margin-left: 290px;
}
.btn {
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
.btn:hover {
    color: white;
    background: #FBB100;
}
</style>
<body>
<!-- ดึงข้อมูลจากคนที่ล็อคอินเข้ามา -->
<?php
include("./database.php");
if (isset($_SESSION['member'])){
    $data = $_SESSION['member'];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT member_id, firstname from member WHERE email= :data";
    $q = $pdo->prepare($sql);
    $q->bindParam(':data', $data, PDO::PARAM_STR);
    $q->execute();
    $f =  $q-> fetch();
?>

<video autoplay loop id="myVideo" muted plays-inline>
    <source src="firework2.mp4" type="video/mp4">
</video>
<div class="bg-video"></div>
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="home_login.php"><img src= "logogoAsset 2.png" height="45"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <form action="fest_island.php" method="POST">
            <input type="submit" name="Festival" value="FESTIVAL">&nbsp;
        </form>
    <form action="ticket.php" method="POST">
		<input type="submit" name="Hokkaido" value="HOKKAIDO">&nbsp;
		<input type="submit" name="Honshu" value="HONSHU">&nbsp;
		<input type="submit" name="Shikoku" value="SHIKOKU">&nbsp;
		<input type="submit" name="Kyushu" value="KYUSHU">&nbsp;
    </form>
    <form action="aboutus1.php" method="POST">
        <input type="submit" name="About" value="ABOUT">&nbsp;
    </form>
    </ul>
    <ul class="navbar-nav mr-sm-0">
        <div class="dropdown">
            <button class="dropbtn"><?php echo $f['firstname'];?></button>
            <div class="dropdown-content">
                <a href="myaccount.php?memberid=<?php echo $f['member_id']; ?>">My Account</a>
                <a href="myticket.php?memberid=<?php echo $f['member_id']; ?>">My Ticket</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <li class="nav-item">
            <a class="nav-link" href="basket.php?memberid=<?php echo $f['member_id']; ?>">My Bag <i class="fas fa-shopping-bag" style="font-size: 20pt; color: #FFF982;"></i></a>
        </li>
        <!-- <form>
        </form>
        <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#loginForm">LOG IN</a>
        </li> -->
    </ul>
  </div>
</nav>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-12">
        <br><br><br><br><br>
            <img src= "logogoAsset 2.png" class="animated" width="90%">
            <br>
            <form action="searcher_login.php" method="get">
	            <span><input type="text" name="terms" size="20px" class="search animated" placeholder="search...">
                <input class="btn btn-default animated" type="submit" name="searcher" value="GO"></span>
            </form>
        </div>
    </div>
</div>
<br><br> 

<?php
}
Database::disconnect();
?>
</body>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>   
</html>