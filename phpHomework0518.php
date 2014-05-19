<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Arrays - Homework</title>
</head>
<body>

	<h1>Homework</h1>

	<?PHP

	// Exercise 1
	// Create an array with 10 elements of fruit (Apple, Banana, Cherry, Date, Elderberry, Fig, Grape, Honeydew, ilama, jujube)
	$fruitArr = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grape", "Honeydew", "ilama", "jujube"];

	// Exercise 2
	// Echo out the 6th element "Fig".
	echo $fruitArr[5] . "<br><br>";

	// Exercise 3
	// Modify the 3th element (Cherry) to Cranberry.
	$fruitArr[2] = "Cranberry";

	// Exercise 4
	// Remove the 5th element (Elderberry)
	unset($fruitArr[4]);

	foreach ($fruitArr as $key => $value) {
		echo $key . ": " . $value . "<br>";
	}

	?>

	<h1>Answer</h1>
	Fig<p>Apple</p><p>Banana</p><p>Cranberry</p><p>Date</p><p>Fig</p><p>Grape</p><p>Honeydew</p><p>ilama</p><p>jujube</p>

</body>
</html>