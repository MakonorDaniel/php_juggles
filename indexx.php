<?php

//This is how to print out an array
$subjects = array ("Maths", "English", "Science", "CRK", "IRS");
echo '<pre>';
print_r ($subjects);
echo '</pre>';

// this syntax prints the seconds subject in the array
echo '<pre>';
print_r ($subjects[2]);
echo '</pre>';


//this syntax prints the subjject in the array
for ($i= 0; $i <=4 ; $i++) { 
	echo "The subjects are ".$subjects[$i];
}



echo "<br />"; //this is used to break w=in php tags


//ths syntax prints the third subject on your screen
echo $subjects [2];

echo "<br />";


//this syntax counts and outputs the number of subject in the array
echo count($subjects);
echo "<br />";


//this syntax changes the third subject to Yoruba
$subjects[2] = "Yoruba";

//For each is similar to For Loop and can be used to loop through an Array
$Maths = 1;

//to display 100L in front of the subject
foreach ($subjects as $key) {
	echo $Maths++.' '. $key. " ". "100L" .'<br/>'; 
}
echo "<br />";

//display 100L in frnt of the every subjects
foreach ($subjects as $key => $value) {
	echo $Maths++.' '. $key .'<br/>'; 
}
echo "<table border = '2>";

echo "<tr><th>Serial</th><th>Subjects</th></tr>";
$no = 1;
foreach ($subjects as $sub) {
	echo "<tr>
	<td>$no</td>
	<td>$sub</td>
	</tr>";
	$no = $no + 1;
}
echo "</table>";




?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP Table</title>
</head>
<body>

	<table>
		<tr>
			<th>Send</th>
			<th>Subject</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Maths</td>
		</tr>
		<tr>
			<td>2</td>
			<td>English</td>
		</tr>
		<tr>
			<td>3</td>
			<td>CRK</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Yoruba</td>
		</tr>
	</table>

</body>
</html>