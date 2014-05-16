<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$string = file_get_contents("realestate_data_clean.json");

	$listings=json_decode($string,true);


	// 1.Print the CurMonthRank or each City
	echo "<b>1.Print the CurMonthRank or each City</b><br>";
	echo "<textarea rows='3' cols='80'>";
	foreach ($listings as $list) {
		echo "City: " . $list["MSA_City"] . " ";
		echo "CurMonthRank" . " " . $list["CurMonthRank"]; 
		echo "&#13";
	}
	echo "</textarea><br><br>";


	// 2.Print the Listings_MM and MedianAge_MM of each City
	echo "<b>2.Print the Listings_MM and MedianAge_MM of each City</b><br>";
	echo "<textarea rows='3' cols='80'>";
	foreach ($listings as $list) {
		echo "City: " . $list["MSA_City"] . " ";
		echo "Listings_MM" . " " . $list["Listings_MM"]; 
		echo "Listings_YY" . " " . $list["Listings_YY"]; 
		echo "&#13";
	}
	echo "</textarea><br><br>";


	// 3.Print the Sum of CurMonthRank for all cities
	echo "<b>3.Print the Sum of CurMonthRank for all cities</b><br>";
	$sumCurMonthRank = 0;
	foreach ($listings as $list) {
		$sumCurMonthRank += $list["CurMonthRank"];
	}
	
	echo "The Sum of \"CurMonthRank\" for all cities: ";
	echo $sumCurMonthRank;
	echo "<br><br>";


	// 4.Find the City with the Lowest Rank
	echo "<b>4.Find the City with the Lowest Rank</b><br>";
	$minCurMonthRank = 1000000;
	$minCityCurMonthRank = "";
	foreach ($listings as $list) {
		if ( $minCurMonthRank > $list["CurMonthRank"] ) {
			$minCurMonthRank = $list["CurMonthRank"];
			$minCityCurMonthRank = $list["MSA_City"];
		}
	}
	
	echo "The City with the Lowest Rank: ";
	echo $minCityCurMonthRank . " " . $minCurMonthRank;
	echo "<br><br>";


	// 5.Find the City with the Highest Rank
	echo "<b>5.Find the City with the Highest Rank</b><br>";
	$maxCurMonthRank = 0;
	$maxCityCurMonthRank = "";
	foreach ($listings as $list) {
		if ( $maxCurMonthRank < $list["CurMonthRank"] ) {
			$maxCurMonthRank = $list["CurMonthRank"];
			$maxCityCurMonthRank = $list["MSA_City"];
		}
	}
	
	echo "The City with the Highest Rank: ";
	echo $maxCityCurMonthRank . " " . $maxCurMonthRank;
	echo "<br><br>";


	// 6.Find the City with the Lowest PrevMonthRank
	echo "<b>6.Find the City with the Lowest PrevMonthRank</b><br>";
	$minPrevMonthRank = 1000000;
	$minCityPrevMonthRank = "";
	foreach ($listings as $list) {
		if ( $minPrevMonthRank > $list["PrevMonthRank"] ) {
			$minPrevMonthRank = $list["PrevMonthRank"];
			$minCityPrevMonthRank = $list["MSA_City"];
		}
	}
	
	echo "The City with the Lowest PrevMonthRank: ";
	echo $minCityPrevMonthRank . " " . $minPrevMonthRank;
	echo "<br><br>";


	// 7.Find the City with the Greatest Change 
	// between Rank and PrevMonthRank
	echo "<b>7.Find the City with the Greatest Change between Rank and PrevMonthRank</b><br>";
	$minusRank = 0;
	$minusCity = "";
	foreach ($listings as $list) {
		if ( $minusRank < abs($list["PrevMonthRank"] - $list["CurMonthRank"])) {
			$minusRank = abs($list["PrevMonthRank"] - $list["CurMonthRank"]);
			$minusCity = $list["MSA_City"];
		}
	}
	
	echo "The City with the Greatest Change between Rank and PrevMonthRank: ";
	echo $minusCity . " " . $minusRank;
	echo "<br><br>";
	

	// 8.Find the City with the Highest MedianPrice / MedianAge
	echo "<b>8.Find the City with the Highest MedianPrice / MedianAge</b><br>";
	$maxMedianPrice = 0;
	$cityMaxMedianPrice = "";
	foreach ($listings as $list) {
		if ( $maxMedianPrice < $list["MedianPrice"]) {
			$maxMedianPrice = $list["MedianPrice"];
			$cityMaxMedianPrice = $list["MSA_City"];
		}
	}
	
	echo "The City with the Highest MedianPrice: ";
	echo $maxMedianPrice . " " . $cityMaxMedianPrice;
	echo "<br>";

	$maxMedianAge = 0;
	$cityMaxMedianAge = "";
	foreach ($listings as $list) {
		if ( $maxMedianAge < $list["MedianAge"]) {
			$maxMedianAge = $list["MedianAge"];
			$cityMaxMedianAge = $list["MSA_City"];
		}
	}
	
	echo "The City with the Highest MedianAge: ";
	echo $maxMedianAge . " " . $cityMaxMedianAge;
	echo "<br><br>";

	// 9.Find the Top Ten Cities sorted by City Name
	echo "<b>9.Find the Top Ten Cities sorted by City Name</b><br>";
	$cityNameArray = [];
	foreach ($listings as $list) {
		array_push($cityNameArray, $list["MSA_City"]);
	}
	sort($cityNameArray);
	for ($i=0; $i < 10; $i++) { 
		echo $i + 1 . ": " . $cityNameArray[$i] . "<br>";
	}
	echo "<br>";

	// 10.Bonus Implement your own Bubblesort
	echo "<b>10.Bonus Implement your own Bubblesort</b><br>";
	$arrBub = [8, 7, 3, 4, 6, 1, 9, 2, 5, 0];
	$len = count($arrBub);
	echo "before sort: [";
	for ($i=0; $i < $len; $i++) { 
		echo $arrBub[$i];
		if ($i < $len - 1) {
			echo ", ";
		}
	}
	echo "]<br>";

	// bubblesort
	for ($i=0; $i < $len; $i++) { 
		for ($j=0; $j < $len; $j++) { 
			if ( $j < $len - 1 && $arrBub[$j] > $arrBub[$j + 1] ) {
				$tmp = $arrBub[$j];
				$arrBub[$j] = $arrBub[$j + 1];
				$arrBub[$j + 1] = $tmp;
			}
		}
	}

	echo "after sort: [";
	for ($i=0; $i < $len; $i++) { 
		echo $arrBub[$i];
		if ($i < $len - 1) {
			echo ", ";
		}
	}
	echo "]<br><br><br><br><br><br><br><br><br><br><br><br>";
 ?>