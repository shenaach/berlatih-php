<?php
function pasangan_terbesar($angka){
    //1. looping sebanyak karakter pada angka
    //2. dapatkan pasangan angka dengan substr
    //3. selama looping kalau ketemu angka yg lebih besar,
    //terbesanya diupdate dengan angka
    //4. return angka terbesar
    
    //pisah perpasangan
    $angka_terbesar = substr($angka, 0, 2);
    for ($i=0; $i<= strlen($angka)-2; $i++){
        $pasangan_angka = substr($angka, $i, 2);
        if ($pasangan_angka > $angka_terbesar){
            $angka_terbesar = $pasangan_angka;
        }
    }

    return $angka_terbesar;
    
}
// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>