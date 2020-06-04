<?php
include("./header_login.php");
?>
<style>
body {
    background: #0A1B44;
}
.container {
  position: relative;
  width: 70%;
}
/* Make the image responsive */
.container img {
  width: 80%;
  height: auto;
  background-color: none;
}
.animate-pin {
    width: 6%;
    height: 6%;
    transition: 0.3s;
}
.animate-pin:hover {
    width: 7%;
    height: 7%;
}
.pin1 {
    position: absolute;
    left: 64%;
    top: 5%;
}
.pin2 {
    position: absolute;
    left: 50%;
    top: 51%;
}
.pin3 {
    position: absolute;
    left: 30%;
    top: 65%;
}
.pin4 {
    position: absolute;
    left: 20%;
    top: 75%;
}
.wave{
    width: 70%;
    height: 70%;
    transition: 0.3s;
    position: absolute;
    left: 5%;
    top: 18%;
}
.boat {
    width: 20%;
    height: 23%;
    transition: 0.3s;
    position: absolute;
    left: 75%;
    top: 75%;
}
.firework {
    width: 21%;
    height: 29%;
    transition: 0.3s;
    position: absolute;
    left: 5%;
    top: 20%;
}
.hokkaido {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color: white;
    position: absolute;
    left: 65%;
    top: 32%;
}
.honshu{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color: white;
    position: absolute;
    left: 58%;
    top: 66%;
}
.shikoku{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color: white;
    position: absolute;
    left: 42%;
    top: 83%;
}
.kyushu{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    color: white;
    position: absolute;
    left: 15%;
    top: 83%;
}
</style>        
                <div class="container">
                    <img src="island11.png" alt="Japan Island"/>
                    <div class="animate-pin pin1"><a href="./festival_show.php?fest_island=<?php echo "HKK";?>"><img src="หมุดหันซ้าย.png" alt="hokkaido"/></a></div>
                    <div class="animate-pin pin2"><a href="./festival_show.php?fest_island=<?php echo "HSU";?>"><img src="หมุดหันขวา.png" alt="honshu"/></a></div>
                    <div class="animate-pin pin3"><a href="./festival_show.php?fest_island=<?php echo "SKK";?>"><img src="หมุดหันซ้าย.png" alt="shikoku"/></a></div>
                    <div class="animate-pin pin4"><a href="./festival_show.php?fest_island=<?php echo "KSU";?>"><img src="หมุดหันขวา.png" alt="kyushu"/></a></div>     
                </div>
                <img src="boat.png" alt="boat" class="boat">
                <img src="firework1.png" alt="firework" class="firework">
                <b><h1 class="hokkaido">HOKKAIDO</h1></b>
                <b><h1 class="honshu">HONSHU</h1></b>
                <b><h1 class="shikoku">SHIKOKU</h1></b>
                <b><h1 class="kyushu">KYUSHU</h1></b>
                
    </body>
    <br><br>
<footer class="container-fluid text-center" style="padding: 1px;">
    <p style="color: white;"><br>Copyright &copy; 2019 <img src= "logogoAsset 2.png" height="40"> All Rights Reserved</p>
</footer>
</html>