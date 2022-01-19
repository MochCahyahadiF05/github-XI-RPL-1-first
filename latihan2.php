<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table>
           <tr>
               <td></td>
               <td></td>
               <td>soal 1</td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td>soal 2</td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td>soal 3</td>
           </tr>
           <tr>
               <td>pilih soal</td>
               <td>:</td>
               <td><input type="number" name="pilih" id="" placeholder="pilih angka soal"></td>
           </tr>
           <tr>
               <td>pilih angka</td>
               <td>:</td>
               <td><input type="number" name="angka" id=""></td>
               <td><input type="submit" value="kirim" name="proses"></td>
           </tr>
       </table>

       <?php
            if (isset($_POST['proses'])) {
                $pilih=$_POST['pilih'];
                $angka=$_POST['angka'];
                if ($pilih == 1) {
                    for($f=1;$f<=$angka;$f++){
                        for($d=1;$d<=$f;$d++){
                            echo "$d";
                        }
                        echo "<br>";
                    }
                }elseif ($pilih == 2) {
                    echo "<b>soal 2</b><br><hr>";
                    for ($i=$angka; $i >=1; $i--) { 
                        for ($c=$angka; $c >=$i ; $c--) { 
                            echo "&nbsp";
                        }
                        for ($q=1; $q <=$i ; $q++) { 
                            echo "$q";
                        }
                        echo "<br>";
                    }
                    
                }elseif ($pilih == 3) {
                    echo "<b>soal 3</b><br><hr>";
                    for($f=$angka;$f>=1;$f--){
                        for($d=$angka;$d>=$f;$d--){
                            echo "$d";
                        }
                        echo "<br>";
                    }
                }
            }
       ?>
    </form>
</body>
</html>