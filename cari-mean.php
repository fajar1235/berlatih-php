<?php

function cari_mean($arr){
//kode di sini
$mean = 0;
for($i=0; $i< count($arr); $i++){
    $mean += $arr[$i];
}
$a = $mean / count($arr);
$a = round($a);
// if(count($a)) {
//     echo $average = array_sum($a)/count($a);

return $a;
}



// TEST CASE 
echo "<br>" .cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>" .cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>" .cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>" .cari_mean([1, 3, 3]); // 2
echo "<br>" .cari_mean([7, 7, 7, 7, 7]); // 7

?>
