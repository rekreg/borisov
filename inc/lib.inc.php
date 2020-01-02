<?php

function myError($no, $msg, $file, $line) {
	
	if($no == E_USER_ERROR) {
		//echo "Tак не должно быть";
		$s = date("d-m-Y H:i:s"). " - $msg в $file:$line";
		error_log("$s\n", 3, "error.log");
	} 
	
	
	echo "<div style='border: 2px solid red; padding: 10px; background: hotpink;'>";
	echo "Упси-пупси! Ошибочка! Но мы уже скоро начнем работать над ней...";
	echo "</div>";
	
	
	$s = date("d-m-Y H:i:s"). " - $msg в $file:$line";
	error_log("$s\n", 3, "error.log");
	
}








function drawMenu($menu, $vertical = true) {
	
	if(!is_array($menu))
		return false;
	
	$gorizontal = "<li style='display:inline; margin-right:15px; padding:3px;'>";
	
	$output = "<ul>";
		foreach($menu as $item):
			$output .= ($vertical) ? "<li>" : $gorizontal;
				$output .= "<a href='{$item["href"]}'>";
					$output .= $item["link"];
				$output .= "</a>";
 			$output .= "</li>";
		endforeach;
		$output .= "</ul>";
	return $output;
}


function drawTable($cols=10, $rows=10, $color="hotpink") {
	
	$tbl = "<table border='1' width='200'>";

	for($tr = 1; $tr <= $rows; $tr++):

		$tbl .= "<tr>";

		for($td = 1; $td <= $cols; $td++):

			if ($tr === 1 || $td === 1):
				$tbl .= "<th style='text-align: center; background-color: {$color};'>".$tr * $td."</th>";
			else:
				$tbl .= "<td style='text-align: center;'>".$tr * $td."</td>";
			endif;

		endfor; // for 2

		$tbl .= "</tr>";

	endfor; // for 1

	$tbl .= "</table>";
	
	return $tbl;

} // end drawTable();







?>