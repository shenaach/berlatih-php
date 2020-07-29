<?php
function papan_catur($angka) {
    $pattern = $angka;
    //looping baris
    for ($i = 0; $i < $angka; $i++){
        if ($pattern == $angka){
            for ($j = 0; $j < $pattern; $j++){
                echo "# &nbsp;";
            }
            $pattern--;
            echo "<br>";
        }else {
            for ($j = 0; $j < $pattern; $j++){
                echo "&nbsp;# ";
            }
            $pattern++;
            echo "<br>";
        }
    }
    echo "<br>";
} 

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>