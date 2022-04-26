<?php 
require_once 'lib/qrcode/qrlib.php';

$path = 'assets/images/';
$file = $path.uniqid().".png";
$text = "Name: Khaleeq Zaman";
$text .= "Father Name: Sher Zaman";
$text .= "Post: Computer Operator";

QRcode::png($text, $file, 'L', 7, 2);
//png($text, $file, ECC_LEVEL, Pixel Size, Frame Size)

echo "<center><img src='".$file."'></center>";







?>