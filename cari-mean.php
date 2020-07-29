<?php

function cari_mean($arr){
    if (!is_array($arr)){
        return false;
    }
    else {
        $count = count($arr);
        $sum = array_sum($arr);
        //hitung mean nya
        $total = $sum/$count;
        //rounded (biar ga float)
        $total = ceil($total);
    }
    return $total;
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>";
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>";
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>";
echo cari_mean([1, 3, 3]); // 2
echo "<br>";
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>