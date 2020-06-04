<?php
include("./header1.php");
?>
<style>
	.btnticket {
        display: inline-block;
        width: 75%;
        height: 52px;
        /* padding: 15px;
        font-family: $font-family;
        -webkit-appearance: none;
        outline: 0;
        border: 0;
        color: #0A1B44;
        background: #FBB100; */
        transition: 0.3s;
    }
    .btnticket:hover {
        width: 82%;
        /* color: white;
        background: #E23949; */
    }
	.card {
        background: #041744;
        border: 1px solid #ffffff48;
        display: inline-block;
        align: center;
        box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    
    h3 {
        letter-spacing: 2px;
        line-height: 30px;
        font-family: 'Anton', sans-serif;
        color: #FFF982;
        text-transform: uppercase;
    }
    h5 {
        letter-spacing: 2px;
        line-height: 17px;
        font-size: 14pt;
        font-family: 'Anton', sans-serif;
        color: #FFF982;
        text-transform: uppercase;
    }
    p {
        font-family: 'Prompt', sans-serif;
        color: white;
        line-height: 15px;
        font-size: 11pt;
    }
</style>

<?php
if (isset($_GET['searcher'])){  //เช็คว่าการกดปุ่ม searcher มาไหม
	if ($_GET['searcher'])
	{
		$search = $_GET['terms'];  //กำหนดตัวแปร $search เพื่อเก็บค่า terms ที่มาจากการพิมพ์ค้นหา ที่มาจากหน้า index.php

		if (empty($search))  //ถ้าในตัวแปร $search ไม่มีค่า จะแสดงผลข้อความด้านล่าง
		{
			echo '<h2>No search terms. Total of results: 0</h2>';
		}
		else  //ถ้า $search ไม่ใช่ค่าว่าง
		{   //ส่วนนี้จะเป็นการดึงข้อมูลจากดาต้าเบสมาเพื่อค้นหาคำที่ได้จากการพิมพ์ค้นหาเข้ามา
			include("./database.php");  //เรียกใช้ไฟล์ database.php 
			$pdo = Database::connect();  //เชื่อมต่อดาต้าเบส
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//เป็นคำสั่งที่ดึง fest_name ที่มีคำเดียวกันหรือบางคำที่เหมือนกับคำที่พิมพ์ค้นหาเข้ามา จาก table festival
			//LIKE '%$search%' เป็นเงื่อนไข ที่เอาไว้ใช้ค้นหาข้อมูลที่มีความใกล้เคียง หรือมีตัวอักษรเดียวกันกับค่าที่รับเข้ามา
			$sql = "SELECT * FROM festival WHERE fest_name LIKE '%$search%'";
			$q = $pdo->prepare($sql);
			$q->execute();
			$total = $q-> rowCount();
			$rows = $q->fetchAll();
			Database::disconnect();

			//เป็นส่วนที่แสดงผลที่ได้จากการค้นหา โดยตัวแปร $total จะเป็บการเก็บจำนวนตัวเลขที่ค้นหาเจอใน table
			if ($total) { 
			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="margin-top: 20px"><br>
					<h1 style="color:#FFF982; font-family: 'Prompt', sans-serif; display:inline">Results for :
					</h1>&nbsp<h2 style="color: white; font-family: 'Prompt', sans-serif; display:inline">
					<?php echo $search?></h2>
					<br><br><span style="font-size:22px; color:#D11111; font-family: 'Prompt', sans-serif; ">
					Total of results: <?php echo $total ?></span><br><br>
					</div>
				<?php
				//$row จะแสดงข้อมูลของเทศกาลดอกไม้ไฟที่ค้นหาเจอ โดยวนลูปออกมาจาก $rows
				foreach ($rows as $row) {
				?>
					<div class="col-md-4 text-center">
						<br>
                		<div class="card" style="width: 15rem;">
                    		<img src="<?php echo $row['fest_img1'];?>" class="card-img-top" width="200" height="300" 
							style="object-fit:cover;"> 
                    		<div class="card-body">
                        		<h3 class="card-title"><i><?php echo $row['fest_name']; ?></i></h3>
                        		<p class="card-title"><?php echo $row['fest_date'] ?></p>
                        		<h5 class="card-title">฿<?php echo $row['price'];?></h6><br>
                        		<a href="#"><img src="buttonticket.png" class="btnticket"></a>
                    		</div>
                		</div>
					</div>
					<?php
						}
					?>
					</div>
				</div>
			<?php
			}
			//เมื่อตรวจสอบแล้ว หากคำที่พิมพ์เข้ามาไม่มีใน table จะแสดงผล No results where found for: คำที่พิมพ์ค้นหาเข้ามา
			else
			{
				?><br><br><br><h2 style="color:#D11111; font-family: 'Prompt', sans-serif; display:inline">
				&nbsp;&nbsp;&nbsp;&nbsp;No results where found for: <?php echo $search ?> </h2><?php
			}
		}
	}
}?>
<br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>  
</body>
</html>