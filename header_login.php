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
body {
    font-family: Arial, Helvetica, sans-serif;
    background: url(bg.png) no-repeat 50% fixed / cover;
}   
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
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.hanabi {
    color: white;
    font-family: Osaka-Sans serif;
    font-size: 12vw;
    letter-spacing: 5px;
    line-height: 10vw;
    /* background: rgba(81, 63, 163, 0.322); */
}
.modal { /*พื้นหลังรอบๆกล่อง*/
    padding: 4em 4em 2em;
}
.modal-dialog {
    margin: 5em auto;
    max-width: 600px;
}
.modal-content {
    background: whitesmoke;
}
.modal-footer {
    max-height: 500px;
}
.form_input {
    background: whitesmoke;
    display: block;
    width: 100%;
    padding: 20px;
    font-family: font-family;
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
    font-family: font-family;
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
    width: 1470px;
    height: 68vw;
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

</style>

<body>
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
<br>
<nav class="navbar navbar-expand-lg">
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
            <a class="nav-link" href="basket.php">My Bag <i class="fas fa-shopping-bag" style="font-size: 20pt; color: #FFF982;"></i></a>
        </li>
    </ul>
  </div>
</nav>
<?php
}
Database::disconnect();
?>