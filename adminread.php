<?php
session_start();
?>
<style>
    .map-responsive {
        overflow:hidden;
        padding-bottom:70%;
        position:relative;
        height:0;
    }
    .map-responsive iframe { 
        left:0;
        top:0;
        height:100%;
        width:75%;
        position:absolute;
    }
</style>
<?php

if (isset($_SESSION['admin'])){
	
	require './database.php';

    $id = null;
    if ( !empty($_GET['festid'])) {
        $festid = $_REQUEST['festid'];
    }
     
    if ( null==$festid ) {
        header("Location: ./adminshow.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM festival where fest_id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($festid));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
    <title>Admin Read</title>
</header>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Read a Festival</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fest_name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Detail</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fest_detail'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Date</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fest_date'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Time</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fest_time'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Firework Numbers</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fw_number'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Location</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['location'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Access</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['access'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Price</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['price'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Festival Image</label>
                        <div class="controls">
                            <label class="checkbox">
                                <img src="<?php echo $data['fest_img1'];?>" style="width: 200px; height: 200px; object-fit:cover;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="<?php echo $data['fest_img2'];?>" style="width: 200px; height: 200px; object-fit:cover;">
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Map</label>
                        <div class="controls">
                            <label class="checkbox">
                                <div class="map-responsive"><?php echo $data['map'];?></div>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Island</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fest_islandfk'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="adminshow.php">Back</a>
                       </div>
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
<?php
}
?>