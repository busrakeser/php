<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Değişkenler</title>
</head>
<body>
<?php
//değişkenler $ ile başlar
//değişkene değer ataması = ile yapılır
//değişkenler rakam ile başlamamalı 1ad olmaz ad1 olabilir
//

echo $ad="Büşra";
$soyad="Keser";
echo $no=500;

echo $ad.$soyad.$no;



//php de br kullanımı
echo "<br>";
echo $ad="Büşra";
echo "<br>";
echo $soyad="Keser";


echo $ad.$soyad."<br>";
echo "PHP";


echo "<h1>Bilgilerim</h1>";
echo "<hr>";
echo $ad." ".$soyad."<br>";
echo $no;

?>
</body>
</html>
