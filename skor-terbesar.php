<?php
function skor_terbesar($arr)
{
//kode di sini

// $count = count($arr);
// $array = [];
// for ($i = 0; $i<= $count -1; $i++)
// {
//     if($array[$arr[$i]['kelas']]['nama'] <= $arr[$i]['nilai'])
//     {
//         $array[$arr[$i]['kelas']]['nama'] = $arr[$i]['nama'];
//         $array[$arr[$i]['kelas']]['kelas'] = $arr[$i]['kelas'];
//         $array[$arr[$i]['kelas']]['nilai'] = $arr[$i]['nilai'];
//     }
// }
// echo "<pre>";
// print_r($array);
// echo "</pre>";
$result = [];
$kelasReactNative = [];
$kelasReactJs = [];
$kelasLaravel = [];

foreach ($arr as $key => $row) {
    $nilai[$key] = $row['nilai'];
    $kelas[$key] = $row['kelas'];
}
array_multisort($kelas, SORT_DESC, $nilai, SORT_DESC, $arr);

for( $i = 0; $i < count($arr); $i++){
    if($arr[$i]['kelas'] == 'React Native') {
        $kelasReactNative[] = $arr[$i];
    } else if ($arr[$i]['kelas'] == 'React JS') {
        $kelasReactJs[] = $arr[$i];
    } else if ($arr[$i]['kelas'] == 'Laravel') {
        $kelasLaravel[] = $arr[$i];    
    }
}

print_r($kelasReactNative);
echo "<br>";
print_r($kelasReactJs);
echo "<br>";
print_r($kelasLaravel) ;

$result[] = $kelasReactNative[0];
$result[] = $kelasReactJs[0];
$result[] = $kelasLaravel[0];
foreach ($result as $key => $hasil) {
    echo  "<br> skor terbesar dari kelas ".$hasil['kelas']. "diperoleh ". $hasil['nama']."dengan skor sebesar ".$hasil['nilai'];
    echo'<pre>';
    print_r($hasil);
    echo'</pre>';
}
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