<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Get Metodları</title>
</head>
<body>
<?php
//echo $_POST['ad'];//gönderilen post isteklerini yakalamak için kullanılır
//echo $_POST['soyad'];

echo $_GET['ad'];//gönderilen get isteklerini yakalamak için kullanılır
echo $_GET['soyad'];
?>

<form action="islem.php" method="get">//islem.php sayfasına forma girilen bilgileri gönderdik
    Ad <input type="text" name="ad" placeholder="Adınız">
    Soyad <input type="text" name="soyad" placeholder="Soyadınız">
    <input type="submit" value="Formu Gönder">

</form>
</body>
</html>