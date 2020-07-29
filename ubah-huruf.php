<?php
function ubah_huruf($string){

    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for ($i=0; $i < strlen($string); $i++){
        $position = strrpos($alphabet, $string[$i]);
        $output .= substr($alphabet, $position+1, 1);
    }
    return $output;

    /*
    $cari = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $replace = array("B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","A");
    $hasil = str_replace($cari, $replace, $string);
    echo $string. " = ".strtolower($hasil)."<br>"; 
    */
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>