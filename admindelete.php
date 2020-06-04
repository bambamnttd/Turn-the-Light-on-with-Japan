<?php 
session_start();

if (isset($_SESSION['admin'])){
	
	require('database.php');

	$id = 0;
	
	if ( !empty($_GET['festid'])) {
		$festid = $_REQUEST['festid'];
	}
	
	if ( !empty($_POST)) {
		// keep track post values
		$festid = $_POST['festid'];
		
		// delete data
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM festival WHERE fest_id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($festid));
		Database::disconnect();
		header("Location: adminshow.php");
		
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
    <title>Admin Delete</title>
</header>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Delete a Festival</h3>
		    		</div>
		    		
	    			<form class="form-horizontal" action="admindelete.php" method="post">
	    			  <input type="hidden" name="festid" value="<?php echo $festid;?>"/>
					  <p class="alert alert-error">Are you sure to delete ?</p>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-danger">Yes</button>
						  <a class="btn" href="adminshow.php">No</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
<?php
}
?>