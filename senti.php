<?php
//$x = $_GET['x'];
require __DIR__.'/libs/PHPInsight/Autoloader.php';

PHPInsight\Autoloader::register();
$sentiment = new \PHPInsight\Sentiment();

$string=[
			". it sucks and it is slow and it is very bad and loser",

			"Basic french is a fantastic and very bad bad bad bad bad bad course",

			"the open book exam is very useful, reduces the load of studying for final exam",

			"The open book exams are such a good idea",

			"They make students lazy and lethargic, hence they end up copy writing instead of learning. so its a bad idea",

			"MY NAME IS RAMU AND I LIKE ICE CREAMS"
		];
$scorefinal=0;
$neg=0;
$pos=0;
for ($x=0; $x <=5 ; $x++) { 

	

$score1 = $sentiment->score($string[$x]);
$score = ($score1["pos"]-$score1["neg"]);
print_r($score);
echo "//";
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