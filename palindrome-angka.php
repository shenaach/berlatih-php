<?php 

function palindrome($str){
    $output = false;
    if (strrev($str) == $str){
        $output = true;
    }
    return $output;
}
function palindrome_angka($angka){
    if ($angka >= 1 && $angka <= 8){
        return $angka+1;
    }
    if (palindrome($angka)){
        $angka++;
    }
    while (palindrome($angka) == false){
        $angka++;
    }
    return $angka;
}

echo palindrome_angka(8); 
echo "<br>";
echo palindrome_angka(10);
echo "<br>";
echo palindrome_angka(117);
echo "<br>";
echo palindrome_angka(175);
echo "<br>";
echo palindrome_angka(1000);
  
?>