<?php

$q=0;
while ($q <= 10) {
     echo "ini perulangan while ($q)<br>";
$q++;
}
$i=10;
echo "<hr>";
while ($i <= 10)
{
  echo "$i<br>";
  echo "Tidak akan tampil di browser<br>";
  $i=$i+1;
}
echo "<hr>";

$c=100;
while ($c >= 0)
{
   echo "$c";
   echo "<br />";
   $c-=8;
}
echo "<hr>";
echo "do while<br>";

$x=1;
do{
 echo "Angka ke $x <br>";
 $x++;
}
while($x<=6);
echo "<hr>";
$s=1;
do {
    $hsl=$s*$s;
    echo "$s *$s =$hsl<br>";
    $s++;
   
} while ($s <= 10);
echo "<hr>";
$l=5;
do {
    $hasil=$l*5;
    echo "Nilai = $l x 5=$hasil<br>";
    $l+=5;
} while ($l <= 100);
?>