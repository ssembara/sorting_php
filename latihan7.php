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
    echo '<br>';
    echo $cari = 'Index ke-'.$cari." = ".$angka[$cari];

}

if(isset($_POST['asc'])){
    echo asc($angka);

}

function asc($nilai){
    $array = $nilai;
    $p = count($array);
    for ($i=0; $i < $p; $i++) { 
        for ($j=0; $j < $p; $j++) { 
            if($array[$j]>$array[$j+1]){
                $sort = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $sort;
            }
        }
    }
    for ($s=0; $s < $p; $s++) { 
        echo 'Index ke-'.$s.' = '.$array[$s];
        echo '<br>';
    }
}

?>
</body>
</html>
