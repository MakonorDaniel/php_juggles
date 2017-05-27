<?php
define ("PI", 3.14);
$radius = 20;

?>

<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>

	<p>The area of a circle given <br/> the radius as 20 is:

	<?php $Area = PI * $radius * $radius; echo $Area; ?></p>


<?php

/*for ($1=0; $i<=5; $i++){

	echo "The value of i is: $i" .'<br/>';
};*/


for ($i = 1; $i<=10; $i=$i+2){
	echo "The value is: $i <br/>";
};

echo '<br/>';

$i = 10;
while ($i >= 1) {
	echo "The value is: $i" . '<br/>';
	$i--;
};

Greet ('male');
Greet ('female');

function Greet ($gender){
	if ($gender == 'male')

{
	echo "Gentleman, we have clipper for sale";
}	

else if ($gender == 'female')
{
		echo "Hi Lady, we have shoes and bags for sale";
}

else if ($gender == '')
{
	echo "Gentleman, we have clipper for sale";
}

else 
{
	echo "Gentleman, we have clipper for sale";
}

};

?>	

</body>
</html>

