<?php
session_start();
include("./include/header.html");
include("database.php");
?>
<style>
    body {
  background-color: #FCD000;
}

.ticket {
  position: relative;
  box-sizing: border-box;
  width: 300px;
  height: 450px;
  margin: 150px auto 0;
  padding: 20px;
  border-radius: 10px;
  background: #FBFBFB;
  box-shadow: 2px 2px 15px 0px #AB9B0D;
}
  
  .ticket:before, .ticket:after {
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

.ticket__text {
  width: 400px;
  font-family: 'Helvetica', 'Arial', sans-serif;
  font-size: 3rem;
  font-weight: 900;
  text-transform: uppercase;
  color: #C6DEDE;
  transform: translate(-25px, 25px) rotate(-55deg) ;
}
</style>
<?php
if ( isset($_SESSION['basket']) && isset ($_SESSION['customer']) ){
    
	$arreglo = $_SESSION['basket'];
	$customer = $_SESSION['customer'];

  $count = 0;
  $count++;
  
	if($count){
        ?>
        <div class="container text-center">
        <div class="row">
        <div class="col-md-12"> </div><span style="font-size:40px; font-weight:300; color: #FFF982; font-family: 'Prompt', sans-serif;"><br>Purchase Summary<br></span><br>
		<span style="font-size:23px; font-weight:400; color:black">Your tickets have been successfully booked! <br>Now you can collect them at the theatre showing your ticket ID. An email has been also sent to you with the details of your purchase.<br>THANK YOU!<br><br></span>
		</div><?php
    
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "insert into customers (customerid, firstname, lastname, street, town, postcode, phonenumber, email) values(
            '',	
            '".$customer['Firstname']."',
            '".$customer['Lastname']."',
            '".$customer['Street']."',
            '".$customer['Town']."',
            '".$customer['Postcode']."',
            '".$customer['Phonenumber']."',
            '".$customer['Email']."')";
		$q = $pdo->prepare($sql);
		$q->execute();
	
		$customernumber = $pdo-> lastInsertId();
		
		for($i=0; $i<count($arreglo);$i++){
				$sql = "insert into booking (bookingid, bookingdate, customerfk, festivalfk, amount) values(
				'',
				NOW(),
				'".$customernumber."',	
				'".$arreglo[$i]['Id']."',
        '".$arreglo[$i]['Number']."')";
				
				$q = $pdo->prepare($sql);
				$q->execute(); 
                
                $bookingnumber =  $pdo-> lastInsertId();

                $bookingreference = $arreglo[$i]['Island'];
                $bookingreference .= $arreglo[$i]['Id'];
                $bookingreference .= $customernumber;
                $bookingreference .= $bookingnumber;

                $sql = "insert into bookingreference (bookingfk, bookingreference) values(
                    '".$bookingnumber."',
                    '".$bookingreference."')";
                    
                    $q = $pdo->prepare($sql);
                    $q->execute();
                    Database::disconnect();
				?>
				
				<div class="col-lg-4">
                <div class="ticket">
                    <div class="ticket__content">
                        <img src = "<?php echo $arreglo[$i]['Festimage'];?>" width="120px"> <br>
                        
                    </div>
                </div>
						<span style="font-size:23px; font-weight:400; color:black"><?php echo $arreglo[$i]['Festname'];?></span><br>
						<span style="font-size:20px; font-weight:400; color:black;font-style:italic"><?php echo $arreglo[$i]['Festdate'];?></span><br>
						<span style="font-size:20px; font-weight:400; color: black">จำนวน: <?php echo $arreglo[$i]['Number'] ?></span><br>
						<span style="font-size:20px; font-weight:600; color:#D11111"><img src="http://icons.iconarchive.com/icons/umar123/build/48/0025-Ticket-icon.png" width="40px">Ticket ID: <?php echo $bookingreference;?></span><br><br></center><br>
				</div><?php
 
		} $_SESSION['email'] = $customer['Email']; $_SESSION['reference'] = $bookingreference; include("sendemail.php"); unset($_SESSION['basket']);
		echo '<div class="row"></div><center><a href="./home_login.php"  style="font-size:22px; font-weight:400; color:#D11111">Go to the Home Page</a></center>';
	}
}
