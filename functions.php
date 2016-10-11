<?php

function gameday($current){
	$gameday = 2;
	if ($current<(1465585200)){
		$gameday = 1;
	}
	elseif ((1465585200)<$current && $current<(1465671600)){
		$gameday = 2;
	}
	elseif ((1465671600)<$current && $current<(1465758000)){
		$gameday = 3;
	}
	elseif ((1465758000)<$current && $current<(1465844400)){
		$gameday = 4;
	}
	elseif ((1465844400)<$current && $current<(1465930800)){
		$gameday = 5;
	}
	elseif ((1465930800)<$current && $current<(1466017200)){
		$gameday = 6;
	}
	elseif ((1466017200)<$current && $current<(1466103600)){
		$gameday = 7;
	}
	elseif ((1466103600)<$current && $current<(1466190000)){
		$gameday = 8;
	}
	elseif ((1466190000)<$current && $current<(1466276400)){
		$gameday = 9;
	}
	elseif ((1466276400)<$current && $current<(1466362800)){
		$gameday = 10;
	}
	elseif ((1466362800)<$current && $current<(1466449200)){
		$gameday = 11;
	}
	elseif ((1466449200)<$current && $current<(1466535600)){
		$gameday = 12;
	}
	elseif ((1466535600)<$current && $current<(1466622000)){
		$gameday = 13;
	}
	return $gameday;
}

function getcode($country){
	switch ($country) {
		case "Albania":
			$code = "alb";
			break;
		case "Austria":
			$code = "aut";
			break;
		case "Belgium":
			$code = "bel";
			break;
		case "Croatia":
			$code = "cro";
			break;
		case "Czech Republic":
			$code = "cze";
			break;
		case "England":
			$code = "eng";
			break;
		case "France":
			$code = "fra";
			break;
		case "Germany":
			$code = "ger";
			break;
		case "Hungary":
			$code = "hun";
			break;
		case "Iceland":
			$code = "isl";
			break;
		case "Ireland":
			$code = "irl";
			break;	
		case "Italy":
			$code = "ita";
			break;	
		case "N.Ireland":
			$code = "nir";
			break;	
		case "Poland":
			$code = "pol";
			break;	
		case "Portugal":
			$code = "por";
			break;	
		case "Romania":
			$code = "rou";
			break;	
		case "Russia":
			$code = "rus";
			break;	
		case "Slovakia":
			$code = "svk";
			break;	
		case "Spain":
			$code = "esp";
			break;	
		case "Sweden":
			$code = "swe";
			break;	
		case "Switzerland":
			$code = "sui";
			break;	
		case "Turkey":
			$code = "tur";
			break;	
		case "Ukraine":
			$code = "ukr";
			break;	
		case "Wales":
			$code = "wal";
			break;
			
			}
	return $code;
}

?>
