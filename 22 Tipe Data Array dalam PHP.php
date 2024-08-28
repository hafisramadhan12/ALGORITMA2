<?php
//cara membuat indexed array
$minuman = array("<p>Kopi", "<p>Teh", "<p>teh tarik");
array("kopi");
array("Teh");
array("teh tarik");

//mengakses elemen array
echo $minuman  = "<p>kopi"; //output:kopi
echo $minuman = "<p>Teh"; //output:Teh
echo $minuman  = "<p>teh tarik"; //output:teh tarik
//menampilkan seluruh isi array
print_r($minuman);

$makanan = ["Nasi Goreng", "nasi padang", "Bubur"];
array("nasi goreng");
array("nasi padang");
array("bubur");

echo $makanan  = "<p>Nasi goreng"; //output:Nasi goreng
echo $makanan = "<p>nasi padang"; //output:nasi p[adang]
echo $makanan  = "<p>bubur"; //output:bubur

print_r($makanan);

echo "<br><br><br><strong>by M HAFIDZ RAMADHAN NST!";
?>