<?php
include("./header_login.php");
$var = "";
				
if(!empty($_REQUEST["Hokkaido"]))
{
	$var = "HKK";
}
else if(!empty($_REQUEST['Honshu']))
{
	$var = "HSU";
}
else if(!empty($_REQUEST['Shikoku']))
{
	$var = "SKK";
}
else if(!empty($_REQUEST['Kyushu']))
{
	$var ="KSU";
}

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * from festival WHERE fest_islandfk= :var";
$q = $pdo->prepare($sql);
$q->bindParam(':var', $var, PDO::PARAM_STR);
$q->execute();
$rows = $q->fetchAll();

$sql = "select island_img from island WHERE island_id= :var";
$q = $pdo->prepare($sql);
$q->bindParam(':var', $var, PDO::PARAM_STR);
$q->execute();
$data = $q->fetch();
Database::disconnect();
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
    .block-font {
        text-align: center;
        display: inline-block;
        height: 53px;
    }

</style>

<div class="class highlight text-center mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h2><img src="<?php echo $data['island_img']; ?>" width="400"></h2></div>
        </div>
        <br>
        <div class="row">
        <?php
            foreach ($rows as $f){
	    ?>
            <div class="col-md-4">
                <div class="card" style="width: 15rem;">
                    <img src="<?php echo $f['fest_img1'];?>" class="card-img-top" width="200" height="300" style="object-fit:cover;"> 
                    <div class="card-body">
                        <h3 class="card-title"><i><?php echo $f['fest_name']; ?></i></h3>
                        <p class="card-title"><?php echo $f['fest_date'] ?></p>
                        <h5 class="card-title">฿<?php echo $f['price'];?></h6><br>
                        <a href="ticket_detail.php?id=<?php echo $f['fest_id']; ?>&name=<?php echo $f['fest_name']?>"><img src="buttonticket.png" class="btnticket"></a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>
