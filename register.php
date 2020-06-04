<?php 
session_start ();
if (isset($_SESSION['post'])){
    $post=$_SESSION['post'];
}else{
    $post=array();
}
if (isset($_SESSION['error'])){
    $error=$_SESSION['error'];
}else{
    $error=array();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sign up</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
body {
    background: url("registerBG.jpg") no-repeat;
    background-size: cover;
    font-family: $font-family;
    font-size: $font-size;
    /* background-size: 250% 100% !important; */
    /* animation: move 20s ease infinite; */
    /* transform: translate3d(0, 0, 0); */
    /* background: linear-gradient(45deg, #F1A490 0.5%, #473C84 50%, #0A1D3E 90%); */
    height: 100%;
    width: 100%;
}
@keyframes move {
    0% {
        background-position: 0 0
    }
    50% {
        background-position: 100% 0
    }
    100% {
        background-position: 0 0
    }
}
.navbar {
    letter-spacing: 3px;
    margin-bottom: 0;
    border: 0pt;
    background : rgba(0, 0, 0, 0);
}
form {
    /* background: url("registerBG.jpg"); */
    background: white;
    padding: 4em 4em 2em;
    max-width: 600px;
    margin: 50px auto 0;
    box-shadow: 0 0 1em #222;
    border-radius: 6px;
}
h2 {
    margin: 0 0 20px 0;
    padding: 10px;
    text-align: center;
    letter-spacing: 2px;
    font-size: 30px;
    color: #0A1D3E;
    border-bottom: solid 1px #B5B5B5;
}
p {
    margin: 0 0 3em 0;
    position: relative;
}
input {
    display: block;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    margin:0;
}
.form_input {
    background: rgba(255, 255, 255, 0.8);
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
.btn {
    display: block;
    width: 100%;
    padding: 15px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #0C244C;
    transition: 0.3s;
}
.btn:hover {
    color: white;
    background: #0A1D3E;
}
</style>
</head>

<body>
<div class="container-fluid">
    <br><br>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">FIREWORK</a>
        </div>
    </nav>
<form id="register_form" name="register_form" method="post" action="insert.php">
    <div class="row">
        <div class="col-sm-12">
            <h2>Sign Up</h2>
            <input class="form_input" type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php echo isset ($post['firstname'])? $post['firstname'] : '';?>" required/>
            <input class="form_input" type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo isset ($post['lastname'])? $post['lastname'] : '';?>" required/>
            <input class="form_input" type="text" name="email" id="email" placeholder="Email" value="<?php echo isset ($post['email'])? $post['email'] : '';?>" required/>
		    <input class="form_input" type="password" name="password" id="password" placeholder="Password" value="<?php echo isset($post['password']) ? $post['password'] : '';?>" required/>
            <input class="form_input" type="password" name="con_pass" id="con_pass" placeholder="Comfirm Password" value="<?php echo isset($post['con_pass']) ? $post['con_pass'] : '';?>" required/>
            <input class="form_input" type="text" name="tel" id="tel" placeholder="Phone Number" value="<?php echo isset($post['tel']) ? $post['tel'] : '';?>" required/>
            <input class="form_input" type="text" name="address" id="address" placeholder="Address" value="<?php echo isset($post['address']) ? $post['address'] : '';?>" required/>
            <br>
            <input class="btn" type="submit" name="button" id="button" value="Create an Account"/>
        </div>
    </div>
</form>
</div>
<br><br>
&nbsp;
</body>

