<?php 
include('./header_login.php');

if (isset($_SESSION['member'])){
    
    $id = null;
    if ( !empty($_GET['memberid'])) {
        $memberid = $_REQUEST['memberid'];
    }
     
    if ( null==$memberid ) {
        	header("Location: ./myaccount.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM member where member_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($memberid));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
?>
<style>
body {
    background: url(bg.png) no-repeat 50% fixed / cover;
}
h2 {
    color: #FFF982;
    font-family: 'Prompt', sans-serif;
}
i {
    font-size: 20pt;
}
table {
    font-family: 'Prompt', sans-serif;
    font-size: 12pt;
    color: white;
    width: 500px;
    display: inline-block;
    text-align: left;
    letter-spacing: 1px;
    margin-left: 160px;
}
</style>

<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <br><br><br>
            <h2>My Account</h2>
            <br><br>
            <table>
                <tr height="40">
                    <td width="200">Firstname</td>
                    <td><?php echo $data['firstname'];?></td>
                </tr>
                <tr height="40">
                    <td>Lastname</td>
                    <td><?php echo $data['lastname'];?></td>
                </tr>
                <tr height="40">
                    <td>Email</td>
                    <td><?php echo $data['email'];?></td>
                </tr>
                <tr height="40">
                    <td>Tel.</td>
                    <td><?php echo $data['tel'];?></td>
                </tr>
                <tr height="40">
                    <td>Address</td>
                    <td><?php echo $data['address'];?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php
}
}
?>
</body>
<br><br><br><br><br><br><br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</html>