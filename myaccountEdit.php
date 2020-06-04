<?php 
include('./header_login.php');
ob_start();
if (isset($_SESSION['member'])){
	$memberid = null;
	if ( !empty($_GET['memberid'])) {
		$memberid = $_REQUEST['memberid'];
	}
	
	if ( null==$memberid ) {
            header("Location: myaccount.php");

	}
	
	if ( !empty($_POST)) 
	{
		// keep track validation errors
		$firstError = null;
        $lastnameError = null;
        $emailError = null;
        $passwordError = null;
        $telError = null;
        $addressError = null;
		
		// keep track post values
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
		
		// validate input
		$valid = true;
        if (empty($firstname)) {
            $firstnameError = 'Please enter Firstname';
            $valid = false;
        }
         
        if (empty($lastname)) {
            $lastnameError = 'Please enter Lastname';
            $valid = false;
        } 

        if (empty($email)) {
            $emailError = 'Please enter Email';
            $valid = false;
        } 

        if (empty($password)) {
            $passwordError = 'Please enter Password';
            $valid = false;
        } 

        if (empty($tel)) {
            $telError = 'Please enter Tel.';
            $valid = false;
        } 

        if (empty($address)) {
            $addressError = 'Please enter Address';
            $valid = false;
        } 
		
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE member SET firstname = ?, lastname = ?, email = ?, password = ?, tel = ?, address = ? WHERE member_id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($firstname, $lastname, $email, $password, $tel, $address, $memberid));
			Database::disconnect();
            header("Location: myaccount.php");
            ob_end_flush();
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM member where member_id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($memberid));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$firstname = $data['firstname'];
		$lastname = $data['lastname'];
        $email = $data['email'];
        $password = $data['password'];
        $tel = $data['tel'];
        $address = $data['address'];
        Database::disconnect();
	}
?>
    <div class="container">
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Update My Account</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="myaccountEdit.php?memberid=<?php echo $memberid?>" method="post">
					  <div class="control-group <?php echo !empty($firstnameError)?'error':'';?>">
					    <label class="control-label">Firstname</label>
					    <div class="controls">
					      	<input name="firstname" type="text"  placeholder="Firstname" value="<?php echo !empty($firstname)?$firstname:'';?>">
					      	<?php if (!empty($firstnameError)): ?>
					      		<span class="help-inline"><?php echo $firstnameError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
                      <div class="control-group <?php echo !empty($lastnameError)?'error':'';?>">
                        <label class="control-label">Lastname</label>
                        <div class="controls">
                            <input name="lastname" type="text" placeholder="Lastname" value="<?php echo !empty($lastname)?$lastname:'';?>">
                            <?php if (!empty($lastnameError)): ?>
                                <span class="help-inline"><?php echo $lastnameError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($passwordError)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="password" type="text" placeholder="Password" value="<?php echo !empty($password)?$password:'';?>">
                            <?php if (!empty($passwordError)): ?>
                                <span class="help-inline"><?php echo $passwordError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                       <div class="control-group <?php echo !empty($telError)?'error':'';?>">
                        <label class="control-label">Tel.</label>
                        <div class="controls">
                            <input name="tel" type="text" placeholder="Tel" value="<?php echo !empty($tel)?$tel:'';?>">
                            <?php if (!empty($telError)): ?>
                                <span class="help-inline"><?php echo $telError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($addressError)?'error':'';?>">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input name="address" type="text" placeholder="Address" value="<?php echo !empty($address)?$address:'';?>">
                            <?php if (!empty($addressError)): ?>
                                <span class="help-inline"><?php echo $addressError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Update</button>
						  <a class="btn" href="myaccount.php?memberid=<?php echo $data['member_id']?>">Back</a>
						</div>
					</form>
				</div>	
    </div> <!-- /container -->
  </body>
</html>
<?php
}
?>