<?php 
//https://www.mindphp.com/forums/viewtopic.php?f=29&t=14428
session_start() ;
$_SESSION['post']=$_POST;
$_SESSION['error']="";
$firstname=$_POST['firstname']; //ตั้งค่าตัวแปร
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=MD5($_POST['password']);  //การเข้ารหัส MD5 ไม่ให้เห็นรหัสที่แท้จริง
$con_pass=$_POST['con_pass'];
$tel=$_POST['tel'];
$address=$_POST['address'];
require_once("connect.php");
if (trim ($firstname=="")){ //ตรวจสอบฟิลด์ที่ไม่ได้กรอกกรอกข้อมูล
    $_SESSION['error']['firstname']='กรุณากรอก';
} if(trim ($lastname=="")){
    $_SESSION['error']['lastname']='กรุณากรอก';
} if(trim ($email=="")){
    $_SESSION['error']['email']='กรุณากรอกรายละเอียดเกี่ยวกับร้าน/สวน';
} if(trim ($password=="")){
    $_SESSION['error']['password']='กรุณากรอกที่อยู่';
} if(trim ($con_pass=="")){
    $_SESSION['error']['con_pass']='กรุณากรอกจังหวัด';
} if(trim ($tel=="")){
    $_SESSION['error']['tel']='กรุณากรอกเบอร์โทร';
} if(trim ($address=="")){
    $_SESSION['error']['address']='กรุณากรอกเบอร์โทร';
    echo "<script> window.history.go(-1);</script>\n";
    exit();
    // Validate email
} if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script type='text/javascript'>alert('อีีเมล์นี้สามารถใช้ได้')</script>";

    $sql="INSERT INTO member (member_id,firstname,lastname,email,password,tel,address) VALUES ('$member_id','$firstname','$lastname','$email','$password','$tel','$address')";//คำสั่งเพิ่มข้อมูล
    $sql_query=mysqli_query($objConnect,$sql);

    if($sql_query) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
        // echo "<meta http-equiv ='refresh'content='0;URL=show-2.php'>";
        $_SESSION['post']="";
    } else{
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');window.history.go(-1);</script>" ;
    }
} else {
    echo("$email is not a valid email address");
}

mysqli_close($objConnect);
?>