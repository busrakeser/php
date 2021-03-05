<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hazır Fonsiyonlar</title>
</head>
<body>

<?php
$random=rand(0,10);//belirlenen aralıkta sayı üretir.
echo $random;
echo "<br>";
if ($random<5){
    echo "Kaybettiniz";
}
else{
    echo "Kazandınız";
}
echo "<br>";

//tek tırnak ve çift tırnak farkı
//çift tırnak içerisinde değişken içerikleri okunurken tek tırnakta okunmaz
$ad="Büşra";
$soyad="Keser";
echo "Benim adım $ad";
echo "<br>";
echo 'Benim adım $ad';

echo "<br>";

//yoksayma kaçış işaretler
//echo "Ben "Php" dilini öğreniyorum";//çift tırnak içerinde çift tırnak kullanjılamaz
echo 'Ben "Php" dilini öğreniyorum';//adımı değişken olarak almak istesiğimde tek tırnak içernde erişemem bu yüzden kullanırız
echo "<br>";
echo "Ben $ad \"Php\" dilini öğreniyorum";//" işaretinin önüne koyduğumuz \ " işaretini programsal kod olarak görme demek oluyor.

?>
</body>
</html>