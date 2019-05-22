<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="latihan7.php" method="POST">
    Input : <input type="number" name="isi">
    <input type="submit" name="cari" value="CARI">
    <input type="submit" name="asc" value="A-Z">
    <input type="submit" name="desc" value="Z-A">
    <br>
    <br>
    </form>
<?php
$angka=array("20","90","50","30","40","10","70","80","100","60");


for ($i=0; $i < count($angka) ; $i++) { 
    echo 'Index ke-'.$i.' = '.$angka[$i];
    echo '<br>';
    
}

if(isset($_POST['cari'])){
    $cari = $_POST['isi'];
    echo '<br>';
    echo 'Hasil Cari : ';
    for ($i=0; $i < count($angka) ; $i++) { 
        if($cari==$angka[$i]){
            echo 'Angka '.$cari.' berada di Index ke-'.$i;
        }
           
    }
    echo '<br>';
}

if(isset($_POST['asc'])){
    echo '<br>';
    echo 'Hasil Sorting A-Z';
    echo '<br>';
    $angka = asc($angka);
    echo $angka;

}

if(isset($_POST['desc'])){
    echo '<br>';
    echo 'Hasil Sorting A-Z';
    echo '<br>';
    $angka = desc($angka);
    echo $angka;

}

function asc($nilai){
    $p = count($nilai);
    for ($i=0; $i < $p; $i++) { 
        for ($j=0; $j < $p-1-$i; $j++) { 
            if($nilai[$j]>$nilai[$j+1]){
                $sort = $nilai[$j];
                $nilai[$j] = $nilai[$j+1];
                $nilai[$j+1] = $sort;
            }
        }
    }
   
    for ($s=0; $s < $p; $s++) { 
        echo 'Index ke-'.$s.' = '.$nilai[$s];
        echo '<br>';
    }
}

function desc($nilai){
    $p = count($nilai);
    for ($i=0; $i < $p; $i++) { 
        for ($j=0; $j < $p-1-$i; $j++) { 
            if($nilai[$j] < $nilai[$j+1]){
                $sort = $nilai[$j];
                $nilai[$j] = $nilai[$j+1];
                $nilai[$j+1] = $sort;
            }
        }
    }
   
    for ($s=0; $s < $p; $s++) { 
        echo 'Index ke-'.$s.' = '.$nilai[$s];
        echo '<br>';
    }
}
?>
</body>
</html>
