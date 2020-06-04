<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Firework Festival</title>
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
        background: #0A1B44;
    }
    .navbar {
        background-color: rgba(255, 255, 255, 0)! important;
    }
    .navbar .navbar-brand {
        font-family: 'Prompt', sans-serif;
        color: #E0D8C8! important;
        text-align: center;
    }
    .navbar .navbar-nav {
        text-align: center;
    }
    .navbar .navbar-nav li a {
        letter-spacing: 2px;
        font-family: 'Prompt', sans-serif;
        color: #E0D8C8! important;
    }
    .navbar .navbar-nav li a:hover {
        letter-spacing: 2px;
        font-family: 'Prompt', sans-serif;
        color: white! important;
    }
    .navbar .navbar-collapse {
        text-align: center;
    }
    .navbar-toggler {
        border: 0;
        background-color: #E0D8C8;
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
        border-bottom: solid 1px #FFF982;
    }
    .f {
        color: white;
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
    footer {
        padding: 25px;
    }
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
    .btn {
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
    }
    
</style>

<body>
<br><br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home_login.php">HANABI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="fest_island.php">Festival<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ticket.php">Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-sm-0">
        <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#loginForm">Login</a>
        </li>
    </ul>
  </div>
</nav>

<!-- hokkaido 1 -->
<?php 
    require_once("connect.php");

    //ดึงข้อมูลจาก Database
    $sql = "SELECT * FROM festival WHERE fest_id = 'HKD001'";
    $result = mysqli_query($objConnect,$sql);

    while ($data= mysqli_fetch_assoc($result)) {
?>
<div class="container-fluid text-center">
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br><br>
            <!-- ชื่องาน -->
            <p class='f'><h1><i><?php echo "$data[fest_name]"; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo "$data[fest_detail]"; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[price]"; ?> บาท/คน</p>

                        <form id="amountBuy_form" name="amountBuy_form" method="POST" action="calculate.php">
                        <select name="amountBuy" class="custom-select custom-select-md mb-3">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Buy Ticket"/>
                        </form></td>
                </tr>
            </table>
        </div>
        <div class="col-md-5">
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$data[fest_img1]";?>" width="100%" height="750" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$data[fest_img2]";?>" width="100%" height="750" style="object-fit:cover;" class="d-block w-100">
                    </div>
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
                                <?php echo "$data[map]"; }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- hokkaido 2 -->
<?php 
    require_once("connect.php");

    //ดึงข้อมูลจาก Database
    $sql = "SELECT * FROM festival WHERE fest_id = 'HKD002'";
    $result = mysqli_query($objConnect,$sql);

    while ($data= mysqli_fetch_assoc($result)) {
?>
<br><br>
<div class="container-fluid text-center">
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br>
            <!-- ชื่องาน -->
            <p class='f'><h1 class="h1-hkk2"><i><?php echo "$data[fest_name]"; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo "$data[fest_detail]"; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[price]"; ?> บาท/คน</p>

                        <form id="amountBuy_form" name="amountBuy_form" method="POST" action="calculate.php">
                        <select name="amountBuy" class="custom-select custom-select-md mb-3">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Buy Ticket"/>
                        </form></td>
                </tr>
            </table>
        </div>

        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$data[fest_img1]";?>" width="100%" height="750" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$data[fest_img2]";?>" width="100%" height="750" style="object-fit:cover;" class="d-block w-100">
                    </div>
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
                                <?php echo "$data[map]"; }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- hokkaido 3 -->
<?php 
    require_once("connect.php");

    //ดึงข้อมูลจาก Database
    $sql = "SELECT * FROM festival WHERE fest_id = 'HKD003'";
    $result = mysqli_query($objConnect,$sql);

    while ($data= mysqli_fetch_assoc($result)) {
?>
<br><br>
<div class="container-fluid text-center">
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br>
            <!-- ชื่องาน -->
            <p class='f'><h1 class="h1-hkk3"><i><?php echo "$data[fest_name]"; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo "$data[fest_detail]"; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap3" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[price]"; ?> บาท/คน</p>

                        <form id="amountBuy_form" name="amountBuy_form" method="POST" action="calculate.php">
                        <select name="amountBuy" class="custom-select custom-select-md mb-3">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Buy Ticket"/>
                        </form></td>
                </tr>
            </table>
        </div>

        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$data[fest_img1]";?>" width="100%" height="850" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$data[fest_img2]";?>" width="100%" height="850" style="object-fit:cover;" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โค้ด login popup -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="myGoogleMap3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <?php echo "$data[map]"; }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- hokkaido 4 -->
<?php 
    require_once("connect.php");

    //ดึงข้อมูลจาก Database
    $sql = "SELECT * FROM festival WHERE fest_id = 'HKD004'";
    $result = mysqli_query($objConnect,$sql);

    while ($data= mysqli_fetch_assoc($result)) {
?>
<br><br>
<div class="container-fluid text-center">
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br>
            <!-- ชื่องาน -->
            <p class='f'><h1 class="h1-hkk4"><i><?php echo "$data[fest_name]"; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo "$data[fest_detail]"; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap3" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[price]"; ?> บาท/คน</p>

                        <form id="amountBuy_form" name="amountBuy_form" method="POST" action="calculate.php">
                        <select name="amountBuy" class="custom-select custom-select-md mb-3">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Buy Ticket"/>
                        </form></td>
                </tr>
            </table>
        </div>

        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$data[fest_img1]";?>" width="100%" height="870" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$data[fest_img2]";?>" width="100%" height="870" style="object-fit:cover;" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โค้ด login popup -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="myGoogleMap3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <?php echo "$data[map]"; }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- hokkaido 5 -->
<?php 
    require_once("connect.php");

    //ดึงข้อมูลจาก Database
    $sql = "SELECT * FROM festival WHERE fest_id = 'HKD005'";
    $result = mysqli_query($objConnect,$sql);

    while ($data= mysqli_fetch_assoc($result)) {
?>
<br><br>
<div class="container-fluid text-center">
    <div class="row">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-md-7">
            <br>
            <!-- ชื่องาน -->
            <p class='f'><h1><i><?php echo "$data[fest_name]"; ?></i></h1></p>
            <!-- รายละเอียด -->
            <p class='f-detail'><?php echo "$data[fest_detail]"; ?><br>&nbsp;</p>

            <table style='width:100%'>
                <tr>
                    <!-- วันที่ -->
                    <td><p class='f'><i class='fas fa-calendar-check'></i>&nbsp;Date</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_date]"; ?></p></td>
                    <!-- เวลา -->
                    <td><p class='f'><i class='fas fa-clock'></i>&nbsp;Time</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fest_time]"; ?></p></td>
                </tr>
                <tr>
                    <!-- การเดินทาง -->
                    <td><br><p class='f'><i class="fas fa-route"></i>&nbsp;How to Go</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[access]"; ?></p></td>
                    <!-- จำนวนดอกไม้ไฟ -->
                    <td><br><p class='f'><i class="fas fa-haykal"></i>&nbsp;Number of Fireworks</p>
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[fw_number]"; ?></p></td>
                </tr>
                <tr>
                    <!-- สถานที่ -->
                    <td><p class='f'>&nbsp;<i class='fas fa-map-marker-alt'></i>&nbsp;Location</p>
                        <p class='f blockFont'>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[location]"; ?></p>
                        <!-- Button trigger modal -->
                        <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#myGoogleMap3" data-toggle="modal">Google Maps&nbsp;<img src="google-map.png" width="30" height="30"></a></p>
                    </td>
                    <td><br><p class='f'>&nbsp;<i class="fas fa-yen-sign"></i>&nbsp;Ticket Price</p>
                            <p class='f'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$data[price]"; ?> บาท/คน</p>

                        <form id="amountBuy_form" name="amountBuy_form" method="POST" action="calculate.php">
                        <select name="amountBuy" class="custom-select custom-select-md mb-3">
                            <option active>เลือกจำนวนตั๋ว</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input class="btn" type="submit" name="submit" id="button" value="Buy Ticket"/>
                        </form></td>
                </tr>
            </table>
        </div>

        <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo "$data[fest_img1]";?>" width="100%" height="770" style="object-fit:cover;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo "$data[fest_img2]";?>" width="100%" height="770" style="object-fit:cover;" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- โค้ด login popup -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="myGoogleMap3" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <?php echo "$data[map]"; }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p style="color: white;"><br>Copyright &copy; 2019 NATTHATIDA CHARTWICHIENCHAI All Rights Reserved</p>
</footer>
</body>
</html>