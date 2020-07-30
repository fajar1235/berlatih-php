<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
<?php

function palindrome_angka($angka) {
  // tulis kode di sini
        $hasil ='';
        $strAngka = strval($angka);
        $string2 = '';

        for($i = strlen($strAngka) - 1; $i >= 0; $i--) {
            $string2 .= $strAngka[$i];
        }

        if($string2 == $strAngka){
            $angka += 1;
        }
        
        while(true) {
            $strAngka = strval($angka);
            $string2 = '';
            for($i = strlen($angka) -1; $i >= 0 ; $i--) {
                $string2 .= $strAngka[$i];
            }
            
            if($string2 == $strAngka){
                global $hasil;
                $hasil = $strAngka;
                echo "<br>";
                return $hasil;
            } else {
                $angka += 1;
            };
        };
};

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
</body>
</html>