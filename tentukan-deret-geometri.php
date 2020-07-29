<?php
//rumus an = a * r(pangkat n-1)
//rumus sum = a(r'n - 1)/r-1
//rumus rasio = r2/r1
$bool = true;
function tentukan_deret_geometri($arr) {
    if (sizeof($arr) <= 1)
        $bool = true;
//rumus rasio = r2/r1
    $rasio = $arr[1]/$arr[0];
    
    for ($i = 1; $i < sizeof($arr); $i++){
        if ((($arr[$i]) / ($arr[$i - 1])) != $rasio){
            $bool = false;
        }
        else {
            $bool = true;
        }
    }

    if ($bool == false){
        echo "false";
    }
    else {
        echo "true";
    }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br>";
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "<br>";
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>