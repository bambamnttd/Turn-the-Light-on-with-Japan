<?php 
ob_start();
include("./header_login.php");

if (isset($_SESSION['basket'])){
	
	if(isset($_GET['id'])){
		$arreglo = $_SESSION['basket'];
		$fest_name = "";
		$fest_img1 = "";
		$fest_date = "";
		$price = 0;
		$fest_islandfk = "";
					
        $same = false;
        
        for($i=0; $i<count($arreglo); $i++){ 
		
            if ($arreglo[$i]['Id'] == $_GET['id']) 
				$same = true;
				$arreglo[$i]['Number'] += $_GET['qty'];
				$_SESSION['basket'] = $arreglo;}
                    
            if(!$same)	{
                    
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select fest_name, fest_date, fest_img1, price, fest_islandfk from festival WHERE fest_id=".$_GET['id'];
                $q = $pdo->prepare($sql);
                $q->execute();
                $f =  $q-> fetch();
				$pdo = Database::disconnect();
			
			$fest_name =  $f['fest_name']; 
			$fest_img1= $f['fest_img1'];
			$price= $f['price'];		
			$fest_date = $f['fest_date'];
			$fest_islandfk = $f['fest_islandfk'];
			
			$newData = array('Id' => $_GET['id'],
			'Festname' => $fest_name,
			'Festimage' => $fest_img1,
			'Festdate' => $fest_date,
            'Festprice' => $price,
			'Number' => $_GET['qty'],
			'Island' => $fest_islandfk);
			
            
			array_push($arreglo, $newData);
			$_SESSION['basket'] = $arreglo;
		}
	}
}
else{
		
	if (isset($_GET['id'])){
					
		$fest_name="";
		$fest_img1="";
		$fest_date = "";
		$price= 0;
		$fest_islandfk = "";
                    
        $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select fest_name, fest_date, fest_img1, price, fest_islandfk from festival WHERE fest_id=".$_GET['id'];
                $q = $pdo->prepare($sql);
                $q->execute();
                $f =  $q-> fetch();
				
			$fest_name =  $f['fest_name']; 
			$fest_img1= $f['fest_img1'];
			$price= $f['price'];		
			$fest_date = $f['fest_date'];
			$fest_islandfk = $f['fest_islandfk'];
				
			$pdo = Database::disconnect();	

			$arreglo[] = array('Id' => $_GET['id'],
			'Festname' => $fest_name,
			'Festimage' => $fest_img1,
			'Festdate' => $fest_date,
            'Festprice' => $price,
			'Number' => $_GET['qty'],
			'Island' => $fest_islandfk);
					
			$_SESSION['basket'] = $arreglo;
		}
}
if(isset($_SESSION['basket'])) {
			
	$data = $_SESSION['basket'];
    $total = 0;
    ?>
    <div class="container text-center">
        <!--- SHOPPING BASKET HEADER --->
        <br><br><br><h1 style="color:#FFF982; font-family: 'Prompt', sans-serif;">My Basket</h1><br><br><br>
        <div class="row">
    <?php
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
        </div>
    </div>
    <br><br>
        <?php
			
		$_SESSION['total'] = $total;

		?> 
				<div class="col-lg-12" style="background:#FDE63C ;text-align:center"><br>
				<center><span style="font-size:21px; font-weight:600; color:#D11111">Total: ฿<?php echo $total;?></span><center><br>
				<center><a class="btn btn-danger" href="./customer_book.php" role="button"  style="font-size:18px">BOOK NOW</a></center><br>  
			
				<center><a href='basket.php?empty=true' style="font-size:22px; font-weight:400; color:#D11111">Empty basket</a></center><br>  </div>
		<?php
} 
		
else{
	echo '<br><br><br><br><center><h2 style="color: rgba(255, 255, 255, 0.658);">The shopping basket is empty</h2>';
	echo '<br><center><a href="./home_login.php"  style="font-size:22px; font-weight:400; color:#D11111">Go to the Home Page</a></center>';
}

if (isset($_GET['empty'])) {
	unset($_SESSION['basket']);
	header( 'Location:  ./basket.php' ) ;
}
ob_end_flush();
?>