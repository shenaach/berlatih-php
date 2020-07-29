<?php
function skor_terbesar($arr){
    $max_js = 0;
    $max_native = 0;
    $max_laravel = 0;
    $name_laravel = '';
    $name_js = '';
    $name_native = '';
    
    $result = [];
    for ($i = 0; $i < count($arr) ; $i++){
        if (($arr[$i]["kelas"] == "Laravel") && ($arr[$i]["nilai"] > $max_laravel)){
                $max_laravel = $arr[$i]["nilai"];
                $name_laravel = $arr[$i]["nama"];
                //$laravel = array_replace($laravel, $arr[$i]);
        }
        else if (($arr[$i]["kelas"] == "React Native") && ($arr[$i]["nilai"] > $max_native)){
                $max_native = $arr[$i]["nilai"];
                $name_native = $arr[$i]["nama"];
                //$native = array_replace($native, $arr[$i]);
        }
        else if (($arr[$i]["kelas"] == "React JS") && ($arr[$i]["nilai"] > $max_js)){
            $max_js = $arr[$i]["nilai"];
            $name_js = $arr[$i]["nama"];
            //$js = array_replace($js, $arr[$i]);
    }
    }
$result[0]["nama"] = $name_laravel;
$result[0]["nama"] = $name_js;
$result[0]["nama"] = $name_native;
$result[0]["kelas"] = $max_laravel;
$result[1]["kelas"] = $max_js;
$result[2]["kelas"] = $max_native;
echo "<pre>";
return $arr;
echo "</pre>";
}


// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>