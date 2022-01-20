<?php

    $barang=["buku","pensil","pulpen","buku gambar"];

    unset($barang[2]);//menghapus isi array indeks 2

     foreach ($barang as $da) {
         echo "barang : $da<br>";
     }
     

    echo "<hr>";
    
    $alat=["tas","sepatu","seragam","tempat pensil"];
    $alat[4]="penghapus";//menambah isi array
    echo "<hr>";
    foreach ($alat as $isi) {
        echo "barang: $isi<br>";
    }
    echo "<hr>";

?>