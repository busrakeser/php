<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Döngüler</title>
</head>
<body>
<?php
//for döngüsü
//$sayi=5;
//
//for ($i=0;$i<=5;$i++){
//    echo $i;
//    echo "<br>";
//}
//?>
<!--<!--//örnek il plakaları-->-->
<!--<select>-->
<!--    --><?php
//    for ($i=0;$i<=81;$i++){?>
<!--    <option>--><?php //echo $i?><!--</option>-->
<!--   --><?php //}
//?>
<!---->
<!--</select>-->
<!---->
<!--<!--   for if örnek -->-->
<?php
//echo "<br>";
//
//for ($i=0;$i<100;$i++){
//    if ($i<50){
//        echo $i;
//    }
//    else{
//        echo "<br>";
//        echo "50 sayısına ulaşıldı";
//        break;
//
//    }
//}
//
////for if örnek2
//echo "<br>";
//$teksayac=0;
//$ciftsayac=0;
//for ($i=1;$i<100;$i++){
//    if ($i%2==0){
//        echo $i." sayısı cifftir";
//        $ciftsayac++;
//        echo "<br>";
//
//    }
//    else{
//        echo $i." sayısı tektir";
//        $teksayac++;
//        echo "<br>";
//
//    }
//}
//echo $teksayac." tane tek sayı vardır.";
//echo $ciftsayac." tane çift sayı vardır.";
//
//?>
<!---->
<!---->
<?php
////while döngüsü
//while ($sayi<=10)//sayi değeri 10 ve 10 dan küçük olana kadar döngü yap demek
//?>


<?php
//foreach döngüsü diziler için önemli
$dizi=array("elma","armut","karpuz","ayva","kiraz");
foreach ($dizi as $meyve){
    echo $meyve;
}
?>

</body>
</html>