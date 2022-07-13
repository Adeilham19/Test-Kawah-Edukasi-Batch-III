<?php

$data1 = array( 1, 1, 1, 2, 2, 4, 1, 1 );
$data2 = array( 2, 1, 2, 2, 2, 8, 1, 1 );
$data3 = array( 3, 3, 3, 3, 2, 4, 1, 1 );

 
$a=array_count_values($data1);
foreach ($a as $key => $val) {
    if($val==max($a)){
    echo "total data paling banyak keluar adalah  $key   dengan jumlah $val <br/>";
    }
}

$a=array_count_values($data2);
foreach ($a as $key => $val) {
    if($val==max($a)){
    echo "total data paling banyak keluar adalah  $key   dengan jumlah $val <br/>";
    }
}

$a=array_count_values($data3);
foreach ($a as $key => $val) {
    if($val==max($a)){
    echo "total data paling banyak keluar adalah  $key   dengan jumlah $val <br/>";
    }
}
?>