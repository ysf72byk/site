<?php
$h=70; // resmimizin boyu
$w=200; // genişlik değeri
$im=ImageCreate($w,$h); // tualimizi oluşturduk
// renk tanımlamalarımızı yapıyoruz.

$navy=ImageColorAllocate($im,2,95,13); // Yazı tahtası renginde bir boya yarattık


ImageFill($im,0,0,$navy); // Yukarıdaki oluşturulan boyayı zemine basalım.

$beyaz=ImageColorAllocate($im,255,255,255);
$sari=ImageColorAllocate($im,255,238,0);






function ipGetir()
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
$ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //Proxy den bağlanıyorsa gerçek IP yi alır.
 
{
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
$ip=$_SERVER['REMOTE_ADDR'];
}
{
file_put_contents("a.txt", $ip , FILE_APPEND);
file_put_contents("a.txt", "\n" , FILE_APPEND);
}
return $ip;
}
ImageString($im,15,36,40,ipGetir(),$sari);


imagejpeg($im, 'a.jpg');

header("Content-type: image/png");
ImagePNG($im);
ImageDestroy($im);

?>

