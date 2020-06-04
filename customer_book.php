<?php
ob_start();
include("./header_login.php");

if (!empty($_POST)) {
	$firstnameError = null;
    $lastnameError = null;
    $streetError = null;
    $townError = null;
    $postcodeError = null;
    $phonenumberError = null;
    $emailError = null;
         
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];
    $town = $_POST['town'];
    $postcode = $_POST['postcode'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
         
    $valid = true;

    if (empty($firstname)) {
        $firstnameError = 'Please enter First Name';
        $valid = false;
    }

    if (empty($lastname)) {
        $lastnameError = 'Please enter Last Name';
        $valid = false;
    }

    if (empty($street)) {
        $streetError = 'Please enter street';
        $valid = false;
    }
        
	if (empty($town)) {
        $townError = 'Please enter town';
        $valid = false;
    }

	if (strlen($postcode) < 6) {
		$postcodeError = "Input is too short, minimum is 6 characters.";
		$valid = false;
	}

	else if(strlen($postcode) > 7) {
		$postcodeError = "Input is too long, maximum is 8 characters.";
		$valid = false;
	}

	if (strlen($phonenumber) < 11) {
		$phonenumberError = "Input is too short, minimum is 11 characters.";
		$valid = false;
	}
	
	elseif(strlen($phonenumber) > 11) {
		$phonenumberError = "Input is too long, maximum is 11 characters.";
		$valid = false;
	}
	
    if (empty($email)) {
        $emailError = 'Please enter Email Address';
        $valid = false;
    }
	
	else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        $emailError = 'Please enter a valid Email Address';
        $valid = false;
    }
         
    if ($valid) {

		$_SESSION['customer'] = array('Firstname' => $firstname,
			'Lastname' => $lastname,
			'Street' => $street,
			'Town' => $town,
			'Postcode' => $postcode,
			'Phonenumber' => $phonenumber,
			'Email' => $email);

			$arrayy = $_SESSION['customer'];

			header("Location: ./booking.php");
    }
}

?>
<style>
.input {
    padding: 15px;
    background: white;
}  

</style>
<!-- Customer form -->
<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<br><br><br><h1 style="color:#FFF982; font-family: 'Prompt', sans-serif;">Customer Form</h1><br><br>
	<form class="form-horizontal" action="customer_book.php" method="post">
		<div class="control-group <?php echo !empty($firstnameError)?'error':'';?>">
			<div class="controls ">
				<input class="input" name="firstname" type="text"  placeholder="First Name" value="<?php echo !empty($firstname)?$firstname:'';?>">
                <?php if (!empty($firstnameError)): ?>    <span class="help-inline" style="color:red;"><?php echo $firstnameError;?></span>    <?php endif; ?>
            </div>
        </div>
        <br>
                     
		<div class="control-group <?php echo !empty($lastnameError)?'error':'';?>">
            <div class="controls">
				<input class="input" name="lastname" type="text"  placeholder="Last Name" value="<?php echo !empty($lastname)?$lastname:'';?>">
				<?php if (!empty($lastnameError)): ?>    <span class="help-inline" style="color:red;"><?php echo $lastnameError;?></span>     <?php endif; ?>
            </div>
        </div>
        <br>
        <div class="control-group <?php echo !empty($streetError)?'error':'';?>">
            
             <div class="controls">
				<input class="input" name="street" type="text"  placeholder="Street" value="<?php echo !empty($street)?$street:'';?>">
                 <?php if (!empty($streetError)): ?>     <span class="help-inline" style="color:red;"><?php echo $streetError;?></span>     <?php endif; ?>
             </div>
        </div>
        <br>
          <div class="control-group <?php echo !empty($townError)?'error':'';?>">
                
                <div class="controls">
					<input class="input" name="town" type="text"  placeholder="Town" value="<?php echo !empty($town)?$town:'';?>">
                    <?php if (!empty($townError)): ?>      <span class="help-inline" style="color:red;"><?php echo $townError;?></span>     <?php endif; ?>
                </div>
          </div>
          <br>

           <div class="control-group <?php echo !empty($postcodeError)?'error':'';?>">
               
                <div class="controls">
                    <input class="input" name="postcode" type="text"  placeholder="Post Code" value="<?php echo !empty($postcode)?$postcode:'';?>">
                    <?php if (!empty($postcodeError)): ?>       <span class="help-inline" style="color:red;"><?php echo $postcodeError;?></span>      <?php endif; ?>
                </div>
             </div>
             <br>

             <div class="control-group <?php echo !empty($phonenumberError)?'error':'';?>">
                
                  <div class="controls">
                        <input class="input" name="phonenumber" type="text"  placeholder="Phone Number" value="<?php echo !empty($phonenumber)?$phonenumber:'';?>">
                        <?php if (!empty($phonenumberError)): ?>     <span class="help-inline" style="color:red;"><?php echo $phonenumberError;?></span>     <?php endif;?>
                   </div>
             </div>
             <br>

             <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                
                 <div class="controls">
                    <input class="input" name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                    <?php if (!empty($emailError)): ?>      <span class="help-inline" style="color:red;"><?php echo $emailError;?></span>      <?php endif;?>
                 </div>
            </div><br>
                      
            <div class="form-actions">
                <button type="submit" class="btn"  style="font-size:18px; font-family: 'Prompt', sans-serif;">Book ticket</button>
            </div>
     </form>
</div>
<div class="col-md-2"></div>
</div>
</div>
<br><br>
<div class="container text-center">
<br><h1 style="color:#FFF982; font-family: 'Prompt', sans-serif;">Ticket to Purchase</h1><br><br>
<div class="row">
<?php
if(isset($_SESSION['basket'])) {
			
	$data = $_SESSION ['basket'];
	$total = 0;
	
	for ($i=0; $i<count($data); $i++){
    ?>
    <div class="col-md-4">
        <div class="card" style="width: 15rem; display: inline-block;">
                    <img src="<?php echo $data[$i]['Festimage'];?>" class="card-img-top" width="200" height="200" style="object-fit:cover;"> 
                    <div class="card-body">
                        <h3 class="card-title"><i><?php echo $data[$i]['Festname']; ?></i></h3>
                        <p class="card-title"><?php echo $data[$i]['Festdate']; ?></p>
                        <h5 class="card-title">฿<?php echo $data[$i]['Festprice'];?></h5>
                        <h5 class="card-title">จำนวน <?php echo $data[$i]['Number'];?> ใบ</h5><br>
                    </div>
        </div>
	</div>
	<?php
	$total += $data[$i]['Festprice']*$data[$i]['Number'];
    }
    ?>
<?php
}
ob_end_flush();
?>
</div>
</div>
<br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>