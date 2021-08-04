<?php

	function findZodiacSign($day, $month){
			$date = new DateTime("2021-".$month."-".$day);
		
			
			$acuarioStart = new DateTime("2021-01-20");
			$piscisStart = new DateTime("2021-02-20");
			$ariesStart = new DateTime("2021-03-21");
			$tauroStart = new DateTime("2021-04-21");
			$geminisStart = new DateTime("2021-05-21");
			$cancerStart = new DateTime("2021-06-21");
			$leoStart = new DateTime("2021-07-23");
			$virgoStart = new DateTime("2021-08-23");
			$libraStart = new DateTime("2021-09-23");
			$scorpioStart = new DateTime("2021-10-23");
			$sagitarioStart = new DateTime("2021-11-23");
			$capricornioStart = new DateTime("2021-12-23");
		

			$result = "";

			$signs = array();			
			
			$signs[] = array("acuario",$acuarioStart);
			$signs[] = array("piscis",$piscisStart);
			$signs[] = array("aries",$ariesStart);
			$signs[] = array("tauro",$tauroStart);
			$signs[] = array("geminis",$geminisStart);
			$signs[] = array("cancer",$cancerStart);
			$signs[] = array("leo",$leoStart);
			$signs[] = array("virgo",$virgoStart);
			$signs[] = array("libra",$libraStart);
			$signs[] = array("escorpio",$scorpioStart);
			$signs[] = array("sagitario",$sagitarioStart);
			$signs[] = array("capricornio",$capricornioStart);			
		


			for($i = 0; $i < sizeof($signs) - 1; $i++){
				if($date > $signs[$i][1] &&
				$date < $signs[$i+1][1]){
					$result = $signs[$i][0];
				}
				
			}

			if($result == "") $result = "capricornio";
	
		return $result;

	}

		

?>