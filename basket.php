<?php 
ob_start();
include("./header_login.php");
?>
<style>
	.btn {
    display: block;
    width: 50%;
    padding: 15px;
    font-family: font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #E23949;
    transition: 0.3s;
}
.btn:hover {
    color: white;
    background: #FBB100;
}
</style>

<?php

if (isset($_SESSION['basket'])){

	//ตรวจสอบว่ามีการรับค่า id จากหน้า ticket_detail.php
	if(isset($_GET['id'])){

		$arreglo = $_SESSION['basket']; //เก็บค่าที่อยู่ใน $_SESSION['basket'] ไว้ในตัวแปร $arreglo

		//ประกาศตัวแปรไว้รับค่าจากดาต้าเบส
		$fest_name = "";
		$fest_img1 = "";
		$fest_date = "";
		$price = 0;
		$fest_islandfk = "";
		
        $same = false;  //กำหนด $same เป็น false
        
        for($i=0; $i<count($arreglo); $i++){  //วนลูปข้อมูลที่อยู่ในตัวแปร $arreglo
		
			//เป็นการว่าเช็คว่าถ้าเทศกาลที่เลือกมาซ้ำกับในตะกร้า จะให้เพิ่มจำนวนเข้าไปและเก็บไว้ใน $_SESSION['basket']
			if ($same == true)  
				if ($arreglo[$i]['Id'] == $_GET['id'])
				$arreglo[$i]['Number'] += $_GET['qty'];
				$_SESSION['basket'] = $arreglo;}
					
			//ถ้าไม่ซ้ำ
            if(!$same)	{
                //ทำการเชื่อมต่อดาต้าเบส แล้วดึงข้อมูลส่วนที่ต้องการจะแสดงผลจากดาต้าเบสออกมา
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "select fest_name, fest_date, fest_img1, price, fest_islandfk from festival WHERE fest_id="
				.$_GET['id'];
                $q = $pdo->prepare($sql);
                $q->execute();
                $f =  $q-> fetch();
				$pdo = Database::disconnect();
			
			//เก็บค่าที่ดึงออกมาจากดาต้าเบสไว้ในตัวแปรที่กำหนดไว้ก่อนหน้านี้
			$fest_name =  $f['fest_name']; 
			$fest_img1= $f['fest_img1'];
			$price= $f['price'];		
			$fest_date = $f['fest_date'];
			$fest_islandfk = $f['fest_islandfk'];
			
			//เก็บค่าตัวแปรใส่เข้า array $newData แบบ key => value เพื่อสะดวกต่อการเรียกใช้
			$newData = array('Id' => $_GET['id'],
			'Festname' => $fest_name,
			'Festimage' => $fest_img1,
			'Festdate' => $fest_date,
            'Festprice' => $price,
			'Number' => $_GET['qty'],
			'Island' => $fest_islandfk);
			
			//เอาข้อมูลใน $newData ใส่เข้าใน $arreglo
            //จากนั้นเอาค่าใน array $arreglo เก็บใส่ไว้ใน $_SESSION['basket']
			array_push($arreglo, $newData);
			$_SESSION['basket'] = $arreglo;
		}
	}
}

//หากเป็นเทศกาลที่ซ้ำ ก็ทำเช่นเดียวกันกับเงื่อนไขด้านบน แต่จะเอาข้อมูลใส่ตัวแปร array $arreglo เลยแล้วก็เก็บค่าไว้ใน $_SESSION['basket']
else{ 
		
	if (isset($_GET['id'])){
					
		$fest_name="";
		$fest_img1="";
		$fest_date = "";
		$price= 0;
		$fest_islandfk = "";
                    
        $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "select fest_name, fest_date, fest_img1, price, fest_islandfk from festival WHERE fest_id="
				.$_GET['id'];
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

//ส่วนแสดงผลข้อมูลในตะกร้า
if(isset($_SESSION['basket'])) {  //ตรวจสอบว่าใน $_SESSION['basket'] มีค่าอยู่
			
	$data = $_SESSION['basket'];  //ประกาศให้ $data เก็บค่าในตะกร้า
    $total = 0;  //ประกาศตัวแปร $total
    ?>
    <div class="container text-center">
        <!--- SHOPPING BASKET HEADER --->
        <br><br><br><h1 style="color:#FFF982; font-family: 'Prompt', sans-serif;">My Bag</h1><br><br><br>
        <div class="row">
    <?php
	//วนลูปข้อมูลใน $data
	for ($i=0; $i<count($data); $i++){
	?>	
	<!-- แสดงผลข้อมูลแต่ละอันที่อยู่ใน $data ที่รับค่ามาจากตะกร้า -->
		<div class="col-md-4">
        <div class="card" style="width: 15rem; display: inline-block;">
                    <img src="<?php echo $data[$i]['Festimage'];?>" class="card-img-top" 
					width="200" height="200" style="object-fit:cover;"> 
                    <div class="card-body">
                        <h3 class="card-title" style="font-family: 'Anton', sans-serif;"><i>
						<?php echo $data[$i]['Festname']; ?></i></h3>
                        <p class="card-title" style="font-family: 'Prompt', sans-serif;">
						<?php echo $data[$i]['Festdate']; ?></p>
                        <h5 class="card-title" style="font-family: 'Prompt', sans-serif;">
						฿<?php echo $data[$i]['Festprice'];?></h5>
                        <h5 class="card-title" style="font-family: 'Prompt', sans-serif;">
						จำนวน <?php echo $data[$i]['Number'];?> ใบ</h5><br>
                    </div>
                </div>
				<br><br>
		</div>
		<?php
		//คำนวณราคาทั้งหมดของแต่ละเทศกาลที่เลือกเข้ามาแล้วเก็บไว้ใน $total
		$total += $data[$i]['Festprice']*$data[$i]['Number'];
        }
        ?>
        </div>
    </div>
    <br><br>
        <?php
		//เก็บค่าราคาทั้งหมดใส่เข้าไปใน $_SESSION['total']
		$_SESSION['total'] = $total;

		?>
				<!-- แสดงผลราคาทั้งหมด -->
				<div class="col-lg-12" style="background:#FDE63C ;text-align:center"><br>
				<center><b style="font-size:21px; font-weight:600; color:#D11111; font-family: 'Prompt', sans-serif;">
				Total: ฿ <?php echo $total;?></b><center><br>

				<!-- Omise Form -->
				<!-- ส่วนของการชำระเงินผ่าน Omise -->
				<!-- โยนราคาทั้งหมดเข้ามา เพื่อส่งต่อให้ Omise จัดการต่อในหน้า chechout.php-->
				<form name="checkoutForm" method="POST" action="checkout.php" 
				style="font-family: 'Prompt', sans-serif; font-size:18px;">
  					<script type="text/javascript" src="https://cdn.omise.co/omise.js"
    					data-key="pkey_test_5fvyc0ows4f3ocr8r14"
    					data-image="http://localhost/Project/logo.png"
    					data-frame-label="TURN THE LIGHT ON WITH JAPAN"
    					data-button-label="Pay now"
    					data-submit-label="Submit"
    					data-location="no"
    					data-amount="<?php echo $total*100; ?>" 
    					data-currency="thb">
  					</script>
  				<!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
</form>
				<!-- กดปุ่ม BOOK NOW เพื่อไปยังหน้า booking.php -->
				<br><center><a class="btn btn-danger" href="./booking.php" role="button"  
				style="font-size:18px; font-family: 'Prompt', sans-serif;">BOOK NOW</a></center><br>  
				
				<!-- ถ้าต้องการลบข้อมูลในตะกร้า เมื่อกดปุ่มจะส่งค่า empty=true ไป-->
				<center><a href='basket.php?empty=true' style="font-size:22px; font-weight:400; color:#D11111">
				Empty bag</a></center><br>  </div>
		<?php
} 
//ถ้าไม่มีค่าอยู่ใน $_SESSION['basket'] จะแสดงผลคำว่า The shopping basket is empty, Go to the Home Page
else{
	echo '<br><br><br><br><center><h2 style="color: rgba(255, 255, 255, 0.658);">The shopping basket is empty</h2>';
	echo '<br><center><a href="./home_login.php"  style="font-size:22px; font-weight:400; color:#D11111">
	Go to the Home Page</a></center>';
}
//ถ้ามาการรับค่า empty เข้ามา จะทำการล้างข้อมูลในตะกร้าออก
if (isset($_GET['empty'])) {
	unset($_SESSION['basket']);
	header( 'Location:  ./basket.php' ) ;
}
ob_end_flush();
?>