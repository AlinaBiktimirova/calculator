<?php
    $str1 = '1234567890';
    $str2 = "9876543210";
    echo $str1;
    echo PHP_EOL."+".PHP_EOL;
    echo $str2;
    function calcSum($str1,$str2)
    {
        $str1Length = strlen($str1);
        $str2Length = strlen($str2);
        $length = max($str1Length, $str2Length);
        $result = [];
        $buff = 0;
        for ($i = 1; $i <= ($length+1); $i++) {
            $s1 = 0;
            if ($str1Length - $i >= 0) {
                $s1 = $str1[$str1Length - $i];
            }
            $s2 = 0;
            if ($str2Length - $i >= 0) {
                $s2 = $str2[$str2Length - $i];
            }
            $result[] = ($s1 + $s2 + $buff) % 10;
            $buff = floor(($s1 + $s2 + $buff) / 10);
        }
        return join("", array_reverse($result));
    }
    echo PHP_EOL."=".PHP_EOL;
    echo calcSum($str1, $str2);
    echo PHP_EOL;
    echo PHP_EOL;
?>
