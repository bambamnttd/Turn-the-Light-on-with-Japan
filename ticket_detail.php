<?php
include("./header_login.php");
if (isset($_GET['id'])){
	
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "select * from festival WHERE fest_id=".$_GET['id']."";
	$q = $pdo->prepare($sql);
	$q->execute();
	$rows = $q->fetchAll();

	$sql = "select fest_img1 from festival WHERE fest_id=".$_GET['id']."";
	$q = $pdo->prepare($sql);
	$q->execute();
	$image = $q->fetch();
	Database::disconnect();
?>
<style>
    body {
        background: url(bgbgdark.png) no-repeat 50% fixed / cover;
    }
      
    .h1 {
        color: #FFF982;
        font-size: 40pt;
        letter-spacing: 3px;
        font-family: 'Anton', sans-serif;
        text-transform: uppercase;
        text-align: left;
    }
    .f {
        text-shadow: 2px 2px 4px #000000;
        color: white;
        font-size: 11pt;
        letter-spacing: 1px;
        /* font-family: 'Mitr', sans-serif; */
        font-family: 'Prompt', sans-serif;
        text-align: left;
    }
    .fas {
        font-size: 22pt;
    }
    .blockFont {
        width: 300px;
    }
    .input[type=submit] {
    background: url(addtobusket.png);
    border: 0;
    display: block;
    height: _the_image_height;
    width: _the_image_width;
}
.btn {
    display: inline-block;
    width: 40%;
    padding: 7px;
    font-family: 'Prompt', sans-serif;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #FBB100;
    transition: 0.3s;
    margin-bottom : 16px;
}
.btn:hover {
    color: white;
    background: #E23949;
}
.btnticket {
        width: 160px;
        height: 50px;
        /* margin-left: -152px; */
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
        width: 175px;
        /* color: white;
        background: #E23949; */
    }

</style>
<br><br>
<div class="container text-center">
<br>
    <div class="row">
    <?php 
    foreach ($rows as $f){
    ?>
        <div class="col-md-6">
            <img src="<?php echo $image['fest_img1'];?>" width="400" height="500" style="object-fit:cover;">
        </div>
        <div class="col-md-6">
            <h1 class="h1"><?php echo$_GET['name']; ?></h1><br>
            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[price]"; ?> บาท/คน</p></td>
                    <td><br>

                        <!-- ฟอร์มสำหรับเลือกจำนวนตั๋ว -->
                        <form id="amountBuy_form" name="amountBuy_form" method="POST">
                        <select name="qty" class="custom-select custom-select-md mb-3" style="width: 120px;">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Choose"/>
                        </form>
                </tr>
            </table>
            <?php
                        if(isset($_POST['submit'])){  //เช็คว่ามีการกดปุ่ม submit เข้ามา ถ้าใช่ จะแสดงจำนวนตั๋วที่เลือก
                            echo "<p class='f' style='color: white; text-align: center; font-size: 15pt;'>
                            จำนวนตั๋ว : ".$_POST['qty']." ใบ</p>"; }?>
                        </td>
                        <!-- ส่งค่า $f[fest_id] id ของงานเทศกาลที่เลือกก่อนหน้านี้จากหน้า ticket.php และ $_POST['qty'] จำนวนตั๋ว
                        ที่เลือกจากฟอร์มเมื่อกี้ ไปยังหน้า basket.php-->
                        <a href="basket.php?id=<?php echo "$f[fest_id]"; ?>&qty=<?php echo $_POST['qty'];?>" 
                        style="font-size:20px; font-weight:500; color:#D11111"><img src="addtobusket.png" 
                        class="btnticket" height="40"></a>
        </div>
    </div>
</div>
<?php 
} }?>
<br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>