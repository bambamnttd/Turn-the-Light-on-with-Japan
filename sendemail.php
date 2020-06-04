<?php //ส่วนการส่ง email
        $arreglo = $_SESSION['basket'];  //รับค่าที่อยู่ในตะกร้ามาเก็บไว้ที่ $arreglo
	    $name = "TURN THE LIGHT ON WITH JAPAN";  //$name เก็บชื่อเว็บไซต์เรา
        $date = date("d-m-Y");  //$date เก็บค่าวันเดือนปี
        $time = date("H:i:s");  //$time เก็บค่าเวลา
        $topic = 'Summary of your purchase';  //$topic เก็บหัวข้อที่แสดงบน email
        $from = "turnthelightonwithjapan.000webhostapp.com";  //$from เก็บค่าลิงค์เว็บไซต์
        $email = $_SESSION['email'];  //รับค่าอีเมลล์ผู้ซื้อจากหน้า booking มาเก็บไว้ที่ $email
        $reference =  $_SESSION['reference'];  //รับค่าเลขอ้างอิงการซื้อมาเก็บไว้ที่ $reference
 
        //ข้อความในส่วนของ comment
       $comment = '
			<div style="font-family: "Helvetica";">
			<center><h1><em>TURN THE LIGHT ON WITH JAPAN</em></h1></center><br>
			<h1><em>Thanks for your purchase</em></h1></center>
			<hr width="90%">
			<p></p> ';

    //แสดงผลข้อมูลตั๋วที่ผู้ใช้งานซื้อ
	for($i=0; $i<count($arreglo);$i++){
		$image = $arreglo[$i]['Festimage'];
		$total = $arreglo[$i]['Number']*$arreglo[$i]['Festprice'];;
		$comment .= "
		<div class='ticket'>
				<div class='ticket__content'>
                    <div class='row'>
                        <div class='col-md-3'>
                        <img src='turnthelightonwithjapan.000webhostapp.com/".$image."' width='200' height='249' style='object-fit:cover;'>
                        </div>
                        <div class='col-md-9'>
                            <p class='right'>รหัสอ้างอิงการซื้อ : <b style='font-size:12pt;'>".$reference."</b></p><p></p>
                            <p class='topic'>".$arreglo[$i]['Festname']."</p>
                            <p>".$arreglo[$i]['Festdate']."</p>
                            <p>ราคา : ".$arreglo[$i]['Festprice']." บาท&nbsp;&nbsp;&nbsp;จำนวน : ".$arreglo[$i]['Number']." ใบ</p><p></p>
                            <p class='right total'>Total : <b style='font-size:12pt;'>".$total."</b> บาท</p>
                        </div>
                    </div>
                </div>
          </div><br><br><br>";
    } 
        //ค่าที่เก็บไว้ในตัวแปร $header โดยระบุ email ของผู้ส่งบรรทัดที่ 3
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf8\r\n"; 
        $headers .= "From: bamnttd@gmail.com\r\n"; 
        
        //คำสั่งส่ง email ด้วยค่าต่างๆที่กำหนดไว้
		try{
			mail($email,$topic,$comment,$headers);
		}catch(Exception $e){}
?>