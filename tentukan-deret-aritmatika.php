<?php
function tentukan_deret_aritmatika($arr) {
    
    $d = $arr[1] - $arr[0];
    for ($i = 2; $i < count($arr); $i++)
    //Pake rumus an = a + (n-1)d
    //Pake rumus Sn = n/2 (2a + (n-1)d)
        if ($arr[$i]- $arr[$i - 1] != $d){
            $bool = false;
        }else {
            $bool = true;
        }
    //if (tentukan_deret_aritmatika($arr))
        if ($bool == false){
            echo "false";
        }
        else {
            echo "true";
        }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>";
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>