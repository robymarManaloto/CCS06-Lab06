<?php
$pieces = [
    'black' => [
   	 'king' => '&#9818;',
   	 'queen' => '&#9819;',
   	 'rook' => '&#9820;',
   	 'bishop' => '&#9821;',
   	 'knight' => '&#9822;',
   	 'pawn' => '&#9823;'
    ],
    'white' => [
   	 'king' => '&#9812;',
   	 'queen' => '&#9813;',
   	 'rook' => '&#9814;',
   	 'bishop' => '&#9815;',
   	 'knight' => '&#9816;',
   	 'pawn' => '&#9817;'
    ]
];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chess</title>
		<meta name="description" content="Our first page">
		<meta name="keywords" content="html tutorial template">
		<style>
			tr:nth-child(even) td:nth-child(even), tr:nth-child(odd) td:nth-child(odd) {
				background: white;
			  
			}
			tr:nth-child(odd) td:nth-child(even), tr:nth-child(even) td:nth-child(odd) {
				background: 
				  repeating-linear-gradient(
					  45deg,
					  #222,
					  #222 10px,
					  #333 10px,
					  #333 20px
				  ),
				  linear-gradient(
					to bottom,
					#eee,
					#999
				  );
			}
			th, td {
				font-size: 2.5em;
				padding-left: 0.2em;
				padding-right: 0.2em;
			}
			table{
            -webkit-text-stroke-width: 0.2px;
            -webkit-text-stroke-color: white;
			 border: 5px solid black;
			}
			
		</style>
		
	</head>
	<body>
		<table class="chess">
		<?php for ($x = 0; $x < 8; $x++) { ?>
			<tr>
				<?php for ($y = 0; $y < 8; $y++) {?>
				<td>
					<?php 
					if($x == 0 && $y == 0){
						echo $pieces['black']['rook'];
					}else if ($x == 0 && $y == 1){
						echo $pieces['black']['knight'];
					}else if ($x == 0 && $y == 2){
						echo $pieces['black']['bishop'];
					}else if ($x == 0 && $y == 3){
						echo $pieces['black']['queen'];
					}else if ($x == 0 && $y == 4){
						echo $pieces['black']['king'];
					}else if ($x == 0 && $y == 5){
						echo $pieces['black']['bishop'];
					}else if ($x == 0 && $y == 6){
						echo $pieces['black']['knight'];
					}else if ($x == 0 && $y == 7){
						echo $pieces['black']['rook'];
					}else if($x == 1){
						echo $pieces['black']['pawn'];
					}else if($x == 7 && $y == 0){
						echo $pieces['white']['rook'];
					}else if ($x == 7 && $y == 1){
						echo $pieces['white']['knight'];
					}else if ($x == 7 && $y == 2){
						echo $pieces['white']['bishop'];
					}else if ($x == 7 && $y == 3){
						echo $pieces['white']['queen'];
					}else if ($x == 7 && $y == 4){
						echo $pieces['white']['king'];
					}else if ($x == 7 && $y == 5){
						echo $pieces['white']['bishop'];
					}else if ($x == 7 && $y == 6){
						echo $pieces['white']['knight'];
					}else if ($x == 7 && $y == 7){
						echo $pieces['white']['rook'];
					}else if($x == 6){
						echo $pieces['white']['pawn'];
					}else{
						echo " ";
					}
					?>
				
				</td>
				<?php
				}
			  ?>
		  </tr> 
		<?php } ?>
	</body>
</html>
