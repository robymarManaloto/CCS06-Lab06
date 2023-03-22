<?php
function even($lim){
	$num = "";
	for ($x = 100; $x > 0; $x--) {
	  if($x % 2 == 0){
		  $num .= $x."<br>";
	  }
	}
	return $num;
}

echo even(100); 
?>