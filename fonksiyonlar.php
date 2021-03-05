<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonsiyonlar</title>
</head>
<body>
<?php
function yaz(){
//    işlemler
}
yaz();

function topla($a,$b){
    return $a+$b;
}
echo topla(5,8);
echo "<br>";

//global değişkenler. fonksiyon içerisinde tanımlanan değişkenklere sadece o fonlsiyondan erişilir
$b=10;
function toplama($a){
    global $b;
    return $a+$b;// sadece bu varken çalışmaz global değişkenler fonksiyona tanıtılmalı
}
echo toplama(20);

//varsayılan değerli fonk
function isimyazma($ad,$soyad="soyad girilmedi"){
    return $ad." ".$soyad;
}
echo isimyazma("Büşra", "Keser");
echo "<br>";
echo isimyazma("Büşra");



//recursive fonksiyonlar
//faktöriyel
echo "<br>";

$sabit=1;
function factoriyel($a){
    global $sabit;
    if ($a>1){
        $sabit=$sabit*$a;
        $a--;
        factoriyel($a);
    }

        return $sabit;

}
echo factoriyel(10);


//fonksiyon var mı yok mu
echo "<br>";

function yazma($a){
    echo $a;
}

if (function_exists("yazma")){
    yazma(7);
}
else{
    echo "Fonksiyon yok";
}


//tüm fonsyonları listeleme
$yaz=get_defined_functions();
echo "<pre>";
print_r($yaz);
echo "</pre>";




?>
</body>
</html>
