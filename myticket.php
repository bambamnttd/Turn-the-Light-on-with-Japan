<?php
include('./header_login.php');
?>
<style>
body {
    background: url(bg.png) no-repeat 50% fixed / cover;
}
table {
    display: inline-block;
    border-radius: 4px;
    border: 1px solid white;
    font-size: 20pt;
    background: white;
}
h2 {
    color: #FFF982;
    font-family: 'Prompt', sans-serif;
}
tr {
    border: 1px solid grey;
}

/* ticket */
.ticket {
  position: relative;
  box-sizing: border-box;
  width: 600px;
  height: 300px;
  margin: 50px auto 0;
  padding: 20px;
  border-radius: 7px;
  background: #FBFBFB;
  box-shadow: 2px 2px 15px 0px #000000af;
}
  .ticket:before,
  .ticket:after {
    content: '';
    position: absolute;
    left: 5px;
    height: 6px;
    width: 290px;
  }
  
  .ticket:before {
    top: -5px;
    background: radial-gradient(circle, transparent, transparent 50%, #FBFBFB 50%, #FBFBFB 100% ) -7px -8px / 16px 16px repeat-x,
  }
  
  .ticket:after {
    bottom: -5px;
    background: radial-gradient(circle, transparent, transparent 50%, #FBFBFB 50%, #FBFBFB 100% ) -7px -2px / 16px 16px repeat-x,
  }

.ticket__content {
  box-sizing: border-box;
  height: 100%;
  width: 100%;
  border: 6px solid #D8D8D8;
}

p{
    font-family: 'Prompt', sans-serif;
    text-align: left; 
    margin-left: 80px;
    margin-top: 12px;
    line-height: 12px;
    font-size: 10pt;
}

.topic {
    font-size: 15pt;
    font-weight: bold;
    line-height: 25px;
}

.right {
    text-align: right;
    margin-right: 10px;
}
.total {
    margin-bottom: 20px;
}

</style>
<?php
if (isset($_SESSION['member'])) {

    $id = null;
    if ( !empty($_GET['memberid'])) {
        $memberid = $_REQUEST['memberid'];
    }
     
    if ( null==$memberid ) {
        header("Location: ./myaccount.php");

    }else{
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM booking where memberfk = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($memberid));
    $rows = $q->fetchAll();
    Database::disconnect();

    $sql = "SELECT * FROM booking where memberfk = ?";
?>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
            <br><br><br>
            <h2>My Ticket</h2>
<?php
    foreach ($rows as $f) { // f คือของ booking
        $sql = "SELECT bookingreference FROM bookingreference where bookingfk = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($f['bookingid']));
        $br = $q->fetch(); //br = bookingreference
        Database::disconnect();

        $sql = "SELECT firstname FROM member where member_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($f['memberfk']));
        $mb = $q->fetch(); //mb = member
        Database::disconnect();

        $sql = "SELECT * FROM festival where fest_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($f['festivalfk']));
        $fv = $q->fetch(); //fv = festival
        Database::disconnect();
?>
            <div class="ticket">
                <div class="ticket__content">
                    <div class="row">
                        <div class="col-md-3">
                        <img src="<?php echo $fv['fest_img1'];?>" width="200" height="249" style="object-fit:cover;">
                        </div>
                        <div class="col-md-9">
                            <p class="right">รหัสอ้างอิงการซื้อ : <b style="font-size:12pt;"><?php echo $br['bookingreference'];?></b></p>
                            <p>คุณ <?php echo $mb['firstname'];?></p>
                            <p class="topic"><?php echo $fv['fest_name'];?></p>
                            <p><?php echo $fv['fest_date'];?></p>
                            <p><?php echo $fv['fest_time'];?></p>
                            <p>ราคา : <?php echo $fv['price'];?> บาท&nbsp;&nbsp;&nbsp;จำนวน : <?php echo $f['amount'];?> ใบ</p><p></p>
                            <p class="right total">Total : <b style="font-size:12pt;"><?php echo $f['total'];?></b> บาท</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php
    }
    }
}
?>

<br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white; text-align: center; display: inline-block; margin-left: 0;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>