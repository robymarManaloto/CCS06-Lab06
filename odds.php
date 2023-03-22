<?php
function odd($lim){
	$num = "";
	for ($x = 0; $x <= $lim; $x++) {
	  if($x % 2 != 0){
		  $num .= $x."<br>";
	  }
	}
	return $num;
}

echo odd(100); 
?>