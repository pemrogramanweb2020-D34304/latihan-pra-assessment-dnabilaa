<?php

$Judul       = array("Sharlock Holmes","Arsene Lupin","Game Of Throne");
$Pengarang   = array("Arthur Conan Doyle","Maurice LeBlanc","George R.R. Martin");
$Harga       = array("50000", "250000","125000");
$Stok        = array(50,20,60);
$total_stok = array_sum($Stok);

$Jumlah_beli        = array(5,2,4);
for($b=0; $b < count($Jumlah_beli); $b++){
   $hasil[$b]=$Jumlah_beli[$b] * $Harga[$b];
   
}
$total_pembelian= array_sum($hasil);


 
// hitung total array
$totalArray = count($Judul);
 
echo "<table border='2'>";
echo "<tr>";
echo "<th>Judul</th>";
echo "<th>Pengarang</th>";
echo "<th>Harga</th>";
echo "<th>Stok</th>";
echo "</tr>";

// looping datanya
for ($i=0; $i < $totalArray; $i++) { 
  echo "<tr>";
  echo "<td>$Judul[$i]</td>";
  echo "<td>$Pengarang[$i]</td>";
  echo "<td>$Harga[$i]</td>";
  echo "<td>$Stok[$i]</td>";
  
  echo "</tr>";
}
  echo "<tr>";
  echo "<th>Jumlah STOK </th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th> $total_stok </th>";
  echo "</tr>";
echo "</table>";
echo "<br>";

 //menambpilkan soal b

$totalBeli = count($Jumlah_beli);
echo "<br>";
echo "Data Pembelian";
echo "<br>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>Judul</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah Beli</th>";
echo "<th>Harga Total Beli</th>";


echo "</tr>";
for ($a=0; $a < $totalArray; $a++) { 
    echo "<tr>";
    echo "<td>$Judul[$a]</td>";
    echo "<td>$Harga[$a]</td>";
    echo "<td>$Jumlah_beli[$a]</td>";
    echo "<td>$hasil[$a]</td>";
    echo "</tr>";
  }
  echo "<tr>";
  echo "<th>Total Pembelian </th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "<th> $total_pembelian </th>";
  echo "</tr>";
  echo "</table>";
?>