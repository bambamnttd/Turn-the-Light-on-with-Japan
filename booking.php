<?php
include("./header_login.php");
?>
<style>
    body {
  background-color: #FCD000;
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
if ( isset($_SESSION['basket']) && isset($_SESSION['member']) ){
    
	$arreglo = $_SESSION['basket'];
  $member = $_SESSION['member'];
  
  $pdo = Database::connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM member WHERE email= ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($member));
  $mem = $q->fetch(PDO::FETCH_ASSOC);
  Database::disconnect();

  $count = 0;
  $count++;
  
	if($count){
        ?>
        <div class="container text-center">
        <div class="row">
        <div class="col-md-12">
          <span style="font-size:40px; font-weight:300; color: #FFF982; font-family: 'Prompt', sans-serif;"><br>Purchase Summary<br></span><br>
		      <span style="font-size:14pt; font-weight:400; color: #A8C2E9; font-family: 'Prompt', sans-serif;">Your tickets have been successfully booked! <br>Now you can collect them at the festival showing your booking reference ID.<br>An email has been also sent to you with the details of your purchase.<br>THANK YOU!<br><br></span>
		    <?php
    
		for($i=0; $i<count($arreglo);$i++){
        $total = $arreglo[$i]['Number']*$arreglo[$i]['Festprice'];
				$sql = "insert into booking (bookingid, bookingdate, memberfk, festivalfk, amount, total) values(
				null,
				NOW(),
				'".$mem['member_id']."',	
				'".$arreglo[$i]['Id']."',
        '".$arreglo[$i]['Number']."',
        '".$total."')";

				
				$q = $pdo->prepare($sql);
				$q->execute(); 
                
                $bookingnumber =  $pdo-> lastInsertId();

                //การสร้างเลขอ้างอิงการซื้อ
                $bookingreference = $arreglo[$i]['Island']; //รหัสเกาะของเทศกาลที่เลือก
                $bookingreference .= $arreglo[$i]['Id'];  //id ของเทศกาลที่เลือก
                $bookingreference .= $mem['member_id'];  //id สมาชิกที่เข้าใช้ระบบอยู่
                $bookingreference .= $bookingnumber;  //เลข booking
                //ใช้คำสั่ง .= เพื่อเก็บค่าให้เรียงต่อกันในตัวแปรเดียวกัน

                $sql = "insert into bookingreference (bookingfk, bookingreference) values(
                    '".$bookingnumber."',
                    '".$bookingreference."')";
                    
                    $q = $pdo->prepare($sql);
                    $q->execute();
                    Database::disconnect();

                // $ticketarray[] = array('Id1' => $arreglo[$i]['Id'],
                // 'Festname1' => $arreglo[$i]['Festname'],
                // 'Festimage1' => $arreglo[$i]['Festimage'],
			          // 'Festdate1' => $arreglo[$i]['Festdate'],
                // 'Festprice1' => $arreglo[$i]['Festprice'],
			          // 'Number1' => $arreglo[$i]['Number'],
                // 'Booking' => $bookingreference);

                // $_SESSION['ticket'] = $ticketarray;
        ?>
        <div class="ticket">
                <div class="ticket__content">
                    <div class="row">
                        <div class="col-md-3">
                        <img src="<?php echo $arreglo[$i]['Festimage'];?>" width="200" height="249" style="object-fit:cover;">
                        </div>
                        <div class="col-md-9">
                            <p class="right">รหัสอ้างอิงการซื้อ : <b style="font-size:12pt;"><?php echo $bookingreference;?></b></p>
                            <p></p>
                            <p class="topic"><?php echo $arreglo[$i]['Festname'];?></p>
                            <p><?php echo $arreglo[$i]['Festdate'];?></p>
                            <p>ราคา : <?php echo $arreglo[$i]['Festprice'];?> บาท&nbsp;&nbsp;&nbsp;จำนวน : <?php echo $arreglo[$i]['Number'] ?> ใบ</p><p></p>
                            <p class="right total">Total : <b style="font-size:12pt;"><?php echo $total;?></b> บาท</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php
//เก็บค่า email ของสมาชิกที่ทำการซื้อตั๋วไว้ $_SESSION['email'], เก็บค่าเลขอ้างอิงการซื้อไว้ใน $_SESSION['reference']
//ทำการเรียกใช้งานหน้า sendemail.php
    } $_SESSION['email'] = $mem['email']; $_SESSION['reference'] = $bookingreference; include("sendemail.php"); unset($_SESSION['basket']);
    echo '<br><div class="row"></div><center><a href="./home_login.php" style="font-size:22px; 
    font-weight:400; color:#D11111">Go to the Home Page</a></center>';
	}
}
?>
<br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white; text-align: center; display: inline-block; margin-left: 0;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>