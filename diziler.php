<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diziler</title>
</head>
<body>
<?php
date_default_timezone_set('Europe/Istanbul');//server tarih ve saat ayarının yapılması
echo "<br>";
$dizi=array("Büşra", "Keser", 30,12);
//echo $dizi; böyle yazdırılmaz
print_r($dizi);//dizi değişkenlerinin içeriğini görüntülemek için print_r kullanabiliriz
echo "<br>";
//echo $dizi[0];
//echo $dizi[1];
//echo $dizi[2];
//echo $dizi[3];

echo "<pre>";//okunabilir bir moda getirdik
print_r($dizi);
echo "</pre>";

//dizilerde kullaılan hazır fonk

$sayilar=array(10,20,30,65,8,40,50);
echo "<pre>";
sort($sayilar);//sayılardan oluşna dizileri küçükten büyüğe doğru sıralar
echo print_r($sayilar);
echo "</pre>";

echo "<pre>";
rsort($sayilar);//sayılardan oluşan dizileri büyükten küçüğe doğru sıralar
echo print_r($sayilar);
echo "</pre>";

$harfler=array("a","b","f","s","c","z");
echo "<pre>";
print_r($harfler);
sort($harfler);//a dan z ye sıralar
print_r($harfler);
rsort($harfler);//z den a ya sıralar
print_r($harfler);
echo "</pre>";


echo in_array("c",$harfler);//karakter diziiçerinde varsa 1 döner yoksa hiçbir şey dönmez
echo "<br>";

echo $sonuc=implode("+", $harfler);//dizinin elemanları + ile birlştirip yazdırdık
echo "<br>";

$zaman="27-10-2017 19:08";
$sonuc=explode(" ",$zaman);//değişkeni parçalayarak dizi haline getirir
print_r($sonuc);
echo "<br>";

$tarih=explode("-",$sonuc[0]);
print_r($tarih);
echo "<br>";

$saat=explode(":",$sonuc[1]);
print_r($saat);
echo "<br>";


//Anlık zaman saat ayarlari
//date Time Zone kullanımı
echo "<hr>";
echo $anlik=date("d-m-Y h:i:s");
$anlik=explode(" ",$anlik);

echo "<pre>";
print_r($anlik);
echo "</pre>";
echo "<br>";

echo "Tarih : ".$anlik[0]." Saat : ".$anlik[1];






?>
</body>
</html>
