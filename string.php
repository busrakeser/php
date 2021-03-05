<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sitring işlemler</title>
</head>
<body>

<?php
//hazır string fonksiyonlar

echo $yazi = "Ben PHP Öğreniyorum";
echo "<br>";
echo strtolower($yazi);//harfleri küçük harfe dönüştürür.
echo "<br>";
echo strtoupper($yazi);//harfleri büyük harfe dönüştürür.
echo "<br>";
echo ucwords($yazi);//kelimelerin ilk harflerini büyük harfe dönüştürür.
echo "<br>";
echo ucfirst($yazi);//metnin ilk harfini büyük yazar
echo "<br>";
echo strlen($yazi);//karakter sayısını verir
echo "<br>";
echo substr($yazi, 0, 10);//yazi değişkeninin 0. karakterinden 10 karakter yazdırır.
echo "<br>";
//örnek
$haber="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi consequuntur cum delectus dignissimos ducimus earum
eos, est eveniet harum itaque iure laborum maiores molestiae nihil nulla numquam obcaecati perferendis perspiciatis
possimus quas qui quibusdam, quos repellat reprehenderit saepe sit vel. Accusantium atque illum inventore odit quasi
reprehenderit, vero voluptate! Architecto corporis cumque distinctio doloribus eum ex fugit harum id in ipsum iure
laudantium libero minus non obcaecati officiis placeat possimus, quia rem repellendus repudiandae sapiente sequi. A
adipisci aliquid amet atque corporis culpa, cumque, deleniti illum minima nisi obcaecati optio perspiciatis quos sit
unde ut, velit? A iste laborum obcaecati quis velit. Cumque enim est nostrum quis! Cum cumque eaque earum fugiat nam
necessitatibus quas repellendus sed tempora unde! Culpa dolores ea error excepturi expedita illo magnam officiis quidem
sunt voluptate! Adipisci animi, consequatur dolor, dolorum ipsam laborum natus nisi nulla provident quibusdam ratione
voluptatibus! Corporis, nisi, quam! Accusantium ad architecto, cum cupiditate deleniti dignissimos, earum eius error
facilis fugit id impedit incidunt libero magnam molestiae mollitia nobis nostrum pariatur quos recusandae rem,
repellendus saepe similique sunt suscipit? Beatae blanditiis cumque delectus dignissimos, distinctio doloremque eveniet
excepturi facere illo minus molestias neque porro, provident. Consectetur dolore eveniet, ex excepturi minima neque
nulla quis rem vel veritatis. Ab alias doloremque molestiae odit omnis quos rem repudiandae sapiente totam ut! A ab
aliquid assumenda aut beatae dolor doloremque dolorum earum et facere id illum labore modi molestias mollitia
necessitatibus nihil nulla officiis omnis pariatur quaerat, quod rem repudiandae soluta ullam, veritatis voluptatem.
Accusamus aliquam commodi doloremque ducimus ea eaque et eum ex exercitationem fugiat hic, impedit ipsum iure molestiae
mollitia nemo nesciunt nobis non nostrum, officiis optio placeat praesentium quaerat quas quibusdam quidem quos rem sed
soluta tempora ullam veritatis voluptas, voluptatibus. Maiores minima mollitia officia optio pariatur vitae voluptatum.
Officia!";

echo "<h1>Haber Başlığı</h1>";
echo "<p>".substr($haber,0,200)."...</p>";
echo "<a href=\"#\">Devamını Oku</a>";




?>
</body>
</html>
