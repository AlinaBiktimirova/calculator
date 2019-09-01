<?php
$str1 = '1234567890';
$str2 = "9876543210";
echo $str1;
echo PHP_EOL."+".PHP_EOL;
echo $str2; 
echo '<br>';
function calcSum($str1, $str2) {
		//$str1 = '1234567890';
		//$str2 = "9876543210";
		$str1Length = strlen($str1);
        $str2Length = strlen($str2);
		$string1 = '';
		$string2 = '';
		$length = max($str1Length, $str2Length);
	for ($i = 1; $i <= ($length+1); $i++) {
		
		if (($str1Length - $i) >= 0){
		$string1 = substr($str1, $str1Length - $i, 1);  //0987654321
			//echo 'строка1= '."$string1";
		}
		echo '<br>';
		if (($str2Length - $i) >= 0){
		$string2 = substr($str2, $str2Length - $i, 1);  //0123456789
			//echo 'строка2='."$string2";
		}
			$result[] = ($string1 + $string2 + $buff) % 10;
            $buff = floor(($string1 + $string2 + $buff) / 10);
	}
	$revstr = implode("",  array_reverse($result));
	return $revstr;
	
}
echo PHP_EOL."=".PHP_EOL;
    echo calcSum($str1, $str2);
    echo PHP_EOL;
    echo PHP_EOL;
?>
