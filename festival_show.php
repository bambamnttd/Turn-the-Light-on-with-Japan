<?php
include("./header_login.php");
?>
<style>
    body {
        background: url(bgbgdark.png) no-repeat 50% fixed / cover;
    }
    h1 {
        color: #FFF982;
        font-size: 55pt;
        letter-spacing: 3px;
        font-family: 'Anton', sans-serif;
        text-transform: uppercase;
    }
    .f-detail {
        color: #A8C2E9;
        font-size: 11pt;
        letter-spacing: 1px;
        /* font-family: 'Mitr', sans-serif; */
        font-family: 'Prompt', sans-serif;
        text-align: justify; 
        text-justify: inter-ideograph;
        width: 100%;
        text-shadow: 2px 2px 4px #000000;
        border-bottom: solid 1px #FFF982;
    }
    .f {
        color: white;
        text-shadow: 2px 2px 4px #000000;
        font-size: 11pt;
        letter-spacing: 1px;
        /* font-family: 'Mitr', sans-serif; */
        font-family: 'Prompt', sans-serif;
        text-align: left;
    }
    .h1-hkk2, .h1-hkk4 {
        color: #FFF982;
        font-size: 50pt;
        letter-spacing: 3px;
        font-family: 'Anton', sans-serif;
        text-transform: uppercase;
    }
    .h1-hkk3 {
        color: #FFF982;
        font-size: 45pt;
        letter-spacing: 3px;
        font-family: 'Anton', sans-serif;
        text-transform: uppercase;
    }
    .blockFont {
        width: 300px;
    }
    /* .img1 {
        width: 400px;
        height: 500px;
        object-fit: cover;
    } */
    .fas {
        font-size: 22pt;
    }
    /* .carousel {
        width: 103%;
        height: 100%;
    } */
    /* footer {
        padding: 1px;
    } */
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
        width:100%;
        position:absolute;
    }
    /* .btn {
        display: block;
        width: 60%;
        padding: 12px;
        font-family: $font-family;
        -webkit-appearance: none;
        outline: 0;
        border: 0;
        color: #0A1B44;
        background: #FBB100;
        transition: 0.3s;
    }
    .btn:hover {
        width: 64%;
        color: white;
        background: #E23949;
    } */
    .btnticket {
        width: 42%;
        height: 52px;
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
        width: 47%;
        /* color: white;
        background: #E23949; */
    }
    
</style>

<!-- festival 1 -->
<?php
if (isset($_GET['fest_island'])){
    $var="";
    $var=$_GET['fest_island'];
    
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * from festival WHERE fest_islandfk= :var";
    $q = $pdo->prepare($sql);
    $q->bindParam(':var', $var, PDO::PARAM_STR);
    $q->execute();
    $rows = $q->fetchAll();
    Database::disconnect();
?>
    
<div class="container-fluid text-center">
<?php
    foreach ($rows as $f){
?>
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br><br>
            <!-- ชื่องาน -->
            <p class='f'><h1><i><?php echo $f['fest_name']; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo $f['fest_detail']; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr >
                    <!-- วันที่ -->
                    <td style='width:50%'><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $f['fest_date']; ?></p></td>
                    <!-- เวลา -->
                    <td style='width:45%'><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $f['fest_time']; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $f['access']; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $f['fw_number']; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><br><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$f[price]"; ?> บาท/คน</p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="ticket_detail.php?id=<?php echo $f['fest_id']; ?>&name=<?php echo $f['fest_name']?>">
                            <img src="buttonticket.png" class="btnticket"></a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$f[fest_img1]";?>" width="100%" height="705" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$f[fest_img2]";?>" width="100%" height="705" style="object-fit:cover;" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- โค้ด login popup -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="myGoogleMap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button><br>
                        </div>
                        <br>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5 map-responsive">
                                <?php echo "$f[map]";?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    } }
?>
<br><br>

<!-- Share -->
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5cd46f1bbf4fdb00128d56db&product=inline-share-buttons" async="async"></script>
<div class="sharethis-inline-share-buttons"></div>
<!-- Share -->

<br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</body>
</html>