<?php  
 require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = MD5($_POST['password']);  //เข้ารหัส MD5

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM member WHERE email='$email' and password='$password'";
 
$result = mysqli_query($objConnect, $query)or die(mysqli_error($objConnect));
$count = mysqli_num_rows($result);
//$query = mysqli_query($strSQL);
//$result = mysqli_fetch_array($query);

if ($count == 1){
    // if(!$result){
    //     echo "Username and Password Incorrect!";
        

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Success :)')</script>";
echo "<meta http-equiv ='refresh'content='0;URL=home_login.php'>";


}else{
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<script type='text/javascript'>alert('Email or Password Incorrect');window.history.go(-1);</script>" ;
}
}
?>