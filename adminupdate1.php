<?php 
session_start();

if (isset($_SESSION['admin'])){
	
	require ('database.php');

	$festid = null;
	if ( !empty($_GET['festid'])) {
		$festid = $_REQUEST['festid'];
	}
	
	if ( null==$festid ) {
			header("Location: adminshow.php");
	}
	
	if ( !empty($_POST)) 
	{
		// keep track validation errors
		$festnameError = null;
        $festdetailError = null;
        $festdateError = null;
        $festtimeError = null;
        $festfwnumError = null;
        $festaccessError = null;
        $festlocationError = null;
        $festpriceError = null;
        $festimage1Error = null;
        $festimage2Error = null;
        $festislandError = null;
		
		// keep track post values
		$festname = $_POST['festname'];
        $festdetail = $_POST['festdetail'];
        $festdate = $_POST['festdate'];
        $festtime = $_POST['festtime'];
        $festfwnum = $_POST['fwnumber'];
        $festaccess = $_POST['access'];
        $festlocation = $_POST['location'];
        $festprice = $_POST['price'];
        $festimage1 = $_POST['festimg1'];
        $festimage2 = $_POST['festimg2'];
        $festisland = $_POST['festislandfk'];
		
		// validate input
		$valid = true;
		if (empty($festname)) {
            $festnameError = 'Please enter Festival Name';
            $valid = false;
        }
        if (empty($festdetail)) {
            $festdetailError = 'Please enter Datail';
            $valid = false;
        } 
        if (empty($festdate)) {
            $festdateError = 'Please enter Date';
            $valid = false;
        } 
        if (empty($festtime)) {
            $festtimeError = 'Please enter Time';
            $valid = false;
        } 
        if (empty($festfwnum)) {
            $festfwnumError = 'Please enter Firework Numbers';
            $valid = false;
        } 
        if (empty($festaccess)) {
            $festaccessError = 'Please enter Access';
            $valid = false;
        } 
        if (empty($festlocation)) {
            $festlocationError = 'Please enter Location';
            $valid = false;
        }
        if (empty($festprice)) {
            $festpriceError = 'Please enter Price';
            $valid = false;
        }
        if (empty($festimage1)) {
            $festimage1Error = 'Please enter Image1';
            $valid = false;
        }
        if (empty($festimage2)) {
            $festimage2Error = 'Please enter Image2';
            $valid = false;
        }
        if (empty($festisland)) {
            $festislandError = 'Please enter Island';
            $valid = false;
        }
		
		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE festival SET fest_name = ?, fest_detail = ?, fest_date = ?, price = ?, fest_img1 = ? WHERE fest_id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($festname,$festdetail,$festdate,$festprice,$festimage1,$productionid));
			Database::disconnect();
			header("Location: ../productioncrud/crud.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM production where productionid = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($productionid));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$festname = $data['festname'];
		$productiontypefk = $data['productiontypefk'];
		$productiondate = $data['productiondate'];
		$productionprice = $data['productionprice'];
		$productionimage = $data['productionimage'];
		Database::disconnect();
	}
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="Maria">
	<link rel="shortcut icon" href= "../images/favicon.png">
	<link rel="stylesheet" href="../css/bootstrap.min.css" >
	<link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</header>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Update a Production</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="update.php?productionid=<?php echo $productionid?>" method="post">
					  <div class="control-group <?php echo !empty($festnameError)?'error':'';?>">
					    <label class="control-label">Production Name</label>
					    <div class="controls">
					      	<input name="festname" type="text"  placeholder="Production Name" value="<?php echo !empty($festname)?$festname:'';?>">
					      	<?php if (!empty($festnameError)): ?>
					      		<span class="help-inline"><?php echo $festnameError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($productiontypefkError)?'error':'';?>">
                        <label class="control-label">Production Type</label>
                        <div class="controls">
                            <input name="productiontypefk" type="text" placeholder="Production Type" value="<?php echo !empty($productiontypefk)?$productiontypefk:'';?>">
                            <?php if (!empty($productiontypefkError)): ?>
                                <span class="help-inline"><?php echo $productiontypefkError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($productiondateError)?'error':'';?>">
                        <label class="control-label">Production Date</label>
                        <div class="controls">
                            <input name="productiondate" type="text" placeholder="Production Date" value="<?php echo !empty($productiondate)?$productiondate:'';?>">
                            <?php if (!empty($productiondateError)): ?>
                                <span class="help-inline"><?php echo $productiondateError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					   <div class="control-group <?php echo !empty($productionpriceError)?'error':'';?>">
                        <label class="control-label">Production Price</label>
                        <div class="controls">
                            <input name="productionprice" type="text" placeholder="Production Price" value="<?php echo !empty($productionprice)?$productionprice:'';?>">
                            <?php if (!empty($productionpriceError)): ?>
                                <span class="help-inline"><?php echo $productionpriceError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                       <div class="control-group <?php echo !empty($productionimageError)?'error':'';?>">
                        <label class="control-label">Production Image</label>
                        <div class="controls">
                            <input name="productionimage" type="text" placeholder="Production Image" value="<?php echo !empty($productionimage)?$productionimage:'';?>">
                            <?php if (!empty($productionimageError)): ?>
                                <span class="help-inline"><?php echo $productionimageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Update</button>
						  <a class="btn" href="crud.php">Back</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
<?php
}
?>