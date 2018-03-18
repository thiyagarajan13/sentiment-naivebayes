<?php
$x = $_GET['x'];
require __DIR__.'/libs/PHPInsight/Autoloader.php';

PHPInsight\Autoloader::register();
$sentiment = new \PHPInsight\Sentiment();

$string=[
			"this subject gave me nightmares. it is very bad",

			"it was ok",

			"it was not bad",

			"it was quite normal",

			"i thinks its very bad",

			"not bad actually"
		];
$scorefinal=0;
$neg=0;
$pos=0;
for ($x=0; $x <=5 ; $x++) { 

	

$score1 = $sentiment->score($string[$x]);
$score = ($score1["pos"]-$score1["neg"]);
print_r($score);
if ($score<0) 
{
	$neg++;
}
else
{
$pos++;
}

$scorefinal=$scorefinal+$score;
}

echo "number of positive comments=".($pos)." no. of negative comments=".($neg);
if ($scorefinal>0) {
	echo "Positive";
}
else{
	echo "Negative";
}

echo "\nScore==> " . ($scorefinal);


?>