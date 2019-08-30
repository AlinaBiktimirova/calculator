<?php

class Calculator{
	public function summ ($x, $y){
		return $x+$y;
	}
}

$calc = new Calculator();
echo $calc->summ(2,3);
