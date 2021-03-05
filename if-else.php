<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İf-Else</title>
</head>
<body>
<?php
//$say=5;

//if ($say==5){
//    echo "Bu sayı 5 tir";
//}
//elseif ($say==4){
//    echo "Bu saı 4 e eşittir";
//}
//else{
//    echo "Sayı 5 ve 4 e eşit değildir.";
//}

//kısa if kullanımı

//echo $say=='5'?'doğru':'yanlış';//sayı 5 '?'ise doğru ':' ise yanlış


//if ile giriş kontrol örneği
if (isset($_POST['issetkullanimi']))
{
    $kadi = "büşra";
    $sifre = "123456";
    $_POST['kullanici_adi'];
    $_POST['sifre'];
    if ($kadi == $_POST['kullanici_adi'] and $sifre == $_POST['sifre'])
    {
        echo "Giriş Başarılı";
    }
    else
    {
        echo "Giriş Başarısız";
    }
}
?>
<form action="" method="post">
    Kullanıcı Adı<input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı Giriniz..">
    Şifre <input type="password" name="sifre" placeholder="Şifrenizi Giriniz..">
    <input type="submit" name="issetkullanimi" value="Giriş Yap">
//isset form var mı dolu mu kontrolünü yapar
    //birden fazla istek atıldığında sayfa açıldığında tüm istekler else e düşer ve o çalışır bu durumun ekrana yansımasını engellemek için kullanılır


</form>
</body>
</html>