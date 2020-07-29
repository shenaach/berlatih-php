<?php
function tukar_besar_kecil($string){
    $newString = "";
    $length = strlen($string);
    for ($i = 0; $i<$length; $i++){
        if ($string[$i] >= 'A' && $string[$i] <= 'Z'){
            $newString .= strtolower($string[$i]);
        }
        else if ($string[$i] >= 'a' && $string[$i] <= 'z'){
            $newString .= strtoupper($string[$i]);
        }
        else {
            $newString .= $string[$i];
        }
    }
    echo $newString;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>