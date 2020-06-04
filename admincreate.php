<?php
session_start();

if (isset($_SESSION['admin'])){
	
	require('database.php');	
	
    if (!empty($_POST)) {
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
        $festmapError = null;
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
        $festmap = $_POST['map'];
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
            $festimage1Error = 'Please choose Image File';
            $valid = false;
        }
        if (empty($festimage2)) {
            $festimage2Error = 'Please choose Image File';
            $valid = false;
        }
        if (empty($festmap)) {
            $festmapError = 'Please embed Google Maps';
            $valid = false;
        }
        if (empty($festisland)) {
            $festislandError = 'Please enter Island Id (ex. HKK, HSU, SKK, KSU)';
            $valid = false;
        }
        
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO festival (fest_name,fest_detail,fest_date,fest_time,fw_number,access,location,price,fest_img1,fest_img2,map,fest_islandfk) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($festname,$festdetail,$festdate,$festtime,$festfwnum,$festaccess,$festlocation,$festprice,$festimage1,$festimage2,$festmap,$festisland));
            Database::disconnect();
            header("Location: adminshow.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="Maria">
	<link rel="icon" type="image/png" href="logo.png"/>
	<link rel="stylesheet" href="bootstrap.min.css" >
	<link rel="stylesheet" href="style.css">
    <title>Admin Update</title>
</header>

<body>
    <div class="container">
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Festival</h3>
                    </div>
             
                    <form class="form-horizontal" action="admincreate.php" method="post">
                      <div class="control-group <?php echo !empty($festnameError)?'error':'';?>">
                        <label class="control-label">Festival Name</label>
                        <div class="controls">
                            <input name="festname" type="text"  placeholder="Festival Name" value="<?php echo !empty($festname)?$festname:'';?>">
                            <?php if (!empty($festnameError)): ?>
                                <span class="help-inline"><?php echo $festnameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festdetailError)?'error':'';?>">
                        <label class="control-label">Detail</label>
                        <div class="controls">
                            <textarea name="festdetail" type="text" placeholder="Detail.." value="<?php echo !empty($festdetail)?$festdetail:'';?>"></textarea>
                            <?php if (!empty($festdetailError)): ?>
                                <span class="help-inline"><?php echo $festdetailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festdateError)?'error':'';?>">
                        <label class="control-label">Date</label>
                        <div class="controls">
                            <input name="festdate" type="text" placeholder="Date" value="<?php echo !empty($festdate)?$festdate:'';?>">
                            <?php if (!empty($festdateError)): ?>
                                <span class="help-inline"><?php echo $festdateError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festtimeError)?'error':'';?>">
                        <label class="control-label">Time</label>
                        <div class="controls">
                            <input name="festtime" type="text" placeholder="Time" value="<?php echo !empty($festtime)?$festtime:'';?>">
                            <?php if (!empty($festtimeError)): ?>
                                <span class="help-inline"><?php echo $festtimeError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festfwnumError)?'error':'';?>">
                        <label class="control-label">Firework Numbers</label>
                        <div class="controls">
                            <input name="fwnumber" type="text" placeholder="Firework Number" value="<?php echo !empty($festfwnum)?$festfwnum:'';?>">
                            <?php if (!empty($festfwnumError)): ?>
                                <span class="help-inline"><?php echo $festfwnumError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                       <div class="control-group <?php echo !empty($festaccessError)?'error':'';?>">
                        <label class="control-label">Access</label>
                        <div class="controls">
                            <input name="access" type="text" placeholder="Access" value="<?php echo !empty($festaccess)?$festaccess:'';?>">
                            <?php if (!empty($festaccessError)): ?>
                                <span class="help-inline"><?php echo $festaccessError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festlocationError)?'error':'';?>">
                        <label class="control-label">Location</label>
                        <div class="controls">
                            <input name="location" type="text" placeholder="Location" value="<?php echo !empty($festlocation)?$festlocation:'';?>">
                            <?php if (!empty($festlocationError)): ?>
                                <span class="help-inline"><?php echo $festlocationError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festpriceError)?'error':'';?>">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <input name="price" type="text" placeholder="Price" value="<?php echo !empty($festprice)?$festprice:'';?>">
                            <?php if (!empty($festpriceError)): ?>
                                <span class="help-inline"><?php echo $festpriceError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festimage1Error)?'error':'';?>">
                        <label class="control-label">Image1</label>
                        <div class="controls">
                            <input name="festimg1" type="file" class="form-control-file" value="<?php echo !empty($festimage1)?$festimage1:'';?>">
                            <?php if (!empty($festimage1Error)): ?>
                                <span class="help-inline"><?php echo $festimage1Error;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festimage2Error)?'error':'';?>">
                        <label class="control-label">Image2</label>
                        <div class="controls">
                            <input name="festimg2" type="file" class="form-control-file" value="<?php echo !empty($festimage2)?$festimage2:'';?>">
                            <?php if (!empty($festimage2Error)): ?>
                                <span class="help-inline"><?php echo $festimage2Error;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festmapError)?'error':'';?>">
                        <label class="control-label">Map</label>
                        <div class="controls">
                            <textarea name="map" placeholder="Map"><?php echo !empty($festmap)?$festmap:'';?></textarea>
                            <?php if (!empty($festmapError)): ?>
                                <span class="help-inline"><?php echo $festmapError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($festislandError)?'error':'';?>">
                        <label class="control-label">Island</label>
                        <div class="controls">
                            <input name="festislandfk" type="text" placeholder="Island" value="<?php echo !empty($festisland)?$festisland:'';?>">
                            <?php if (!empty($festislandError)): ?>
                                <span class="help-inline"><?php echo $festislandError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
						<br>
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="adminshow.php">Back</a>
                        </div>
                    </form>
                </div>      
  </body>
<?php
}
?>