<?php
session_start();

if (isset($_SESSION['admin'])){
	
	require 'database.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin Database</title>
    <link rel="icon" type="image/png" href="logo.png"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: url(bg.png) no-repeat 50% fixed / cover;
}
table {
	background: rgba(255, 255, 255, 0.89);
	font-size: 10pt;
}
/* h1 {
	color: #FFF982;
} */
</style>
<body>
	<br><br>
    <div class="container-fluid text-center">
			<br>
    		<div class="row">
					<div class="col-md-12">
    			<h1  style="color:#FFF982; font-weight:200; font-family: 'Prompt', sans-serif;">Festival Database</h1><br>
				<p>
					<a href="admincreate.php" class="btn btn-success"><b style="font-size:17pt;">+</b></a>
				</p>
				<table class="table table-striped table-bordered" style="width: 685px; display: inline-block; border-radius: 5px;">
		              <thead style="text-align:center">
		                <tr>
		                  <th>ID</th>
		                  <th>Festival Name</th>
											<th>Price</th>
		                  <th>Island</th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php 
					   $pdo = Database::connect();
					   $sql = 'SELECT * FROM festival ORDER BY fest_id ASC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<tr>';
						   		echo '<td>'. $row['fest_id'] . '</td>';
							   	echo '<td>'. $row['fest_name'] . '</td>';
							   	echo '<td>'. $row['price'] . '</td>';
									echo '<td>'. $row['fest_islandfk'] . '</td>';
									echo '<td>';
									echo '<a class="btn btn-info" href="adminread.php?festid='.$row['fest_id'].'">Read</a>';
									echo '&nbsp;&nbsp;';
									 echo '<a class="btn btn-success" href="adminupdate.php?festid='.$row['fest_id'].'">Update</a>';
									 echo '&nbsp;&nbsp;';
							   	echo '<a class="btn btn-danger" href="admindelete.php?festid='.$row['fest_id'].'">Delete</a>';
							   	echo '</td>';
							   	echo '</tr>';
					   }
					   Database::disconnect();
					  ?>
				      </tbody>
							</table>
						</div>
    	</div>
    </div> <!-- /container -->
  </body>
</html>
<?php
}
?>