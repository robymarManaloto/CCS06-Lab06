<?php
function lyr($start,$lim){
	$years = "";
	for ($start; $start <= $lim; $start += 4) {
		$years .= $start."<br>";
	}
	return $years;
}

echo lyr(4,2024); 
?>