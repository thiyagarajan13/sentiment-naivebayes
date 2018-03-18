<html>
<head>
<style type="text/css">
.bgimg {
    background-image: url('background.jpg');
     background-repeat: no-repeat;
     background-size: 100% 100%;
}
.bgimgg{
  background-image: url('backk.jpg');
     background-repeat: no-repeat;
     background-size: 100% 100%;

}
</style>
</head>
<body>
<div class="bgimg">
<BR><BR><BR><BR>
  <DIV STYLE="width:600px;margin:0px auto;" > <CENTER> <h2><p class="bg-info">"In every community, there is work to be done. In every nation, there are wounds to heal. In every heart, there is the power to do it"<br>- Marianne Williamson</p></h2></CENTER></DIV>
   <HR><HR></div>
   <div class="jumbotron">
  <div class="container">
    <H1>THE ANALYSIS OF THE TOPICS ARE AS BELOW:<H1>
  </div>
</div>

  


<div class ="bgimgg">
<div class="container">
<?php include 'navbar.php';
$x = $_GET['x'];
require __DIR__.'/libs/PHPInsight/Autoloader.php';
PHPInsight\Autoloader::register();
$sentiment = new \PHPInsight\Sentiment();
echo("<br><br><br><br>");
include ('db.php');
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
$query = "SELECT topic_title,topic_id FROM `phpbb_topics` WHERE forum_id=$x";
$result = mysqli_query($connect,$query) or die('There was an unexpected error grabbing shouts from the database.');
$index=array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
     $index[] = $row;
}
for ($i=0; $i <count($index) ; $i++) { 

$topic_title[$i]=$index[$i]['topic_title'];
$topic_id[$i]=$index[$i]['topic_id'];
}
////////////////////////////////////
$a=0;
for($a=0;$a<count($topic_title);$a++)
{

$query2="SELECT post_text FROM `phpbb_posts` WHERE topic_id=$topic_id[$a]";
$result2=mysqli_query($connect,$query2) or die('There was an unexpected error grabbing shouts from the database.');
$index2=array();
while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
     $index2[] = $row2;
}
for ($i=0; $i <count($index2) ; $i++) { 

$post_text[$i]=$index2[$i]['post_text'];
}
/////////////

$scorefinal=0;
$neg=0;
$pos=0;
for ($x=0; $x <count($post_text) ; $x++) 
{ 
$score1 = $sentiment->score($post_text[$x]);
$score = ($score1["pos"]-$score1["neg"]);
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
$total=$pos+$neg;
$pospercent=($pos/$total)*100;
$negpercent=($neg/$total)*100;
$neutral=100-($pospercent+$negpercent);

////////////////////
echo '
<br><br><br><br>
<div class="Container">
<div class="panel panel-primary">
  <div class="panel-body">
    <h3>Topic title:'.($topic_title[$a]).'</h3>
  </div>
  <div class="panel-footer"><div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width:'.($pospercent).'%">
    Positive '.($pospercent).'%
  </div>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: '.($negpercent).'%">
    Negative'.($negpercent).'%
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-success" style="width:'.($pospercent).'%">
    <span class="sr-only">35% Complete (success)</span>positive '.($pospercent).'%
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: '.($negpercent).'%">
    <span class="sr-only">20% Complete (warning)</span>negative'.($negpercent).'%
  </div>
  <div class="progress-bar progress-bar-danger" style="width: '.($neutral).'%">
    <span class="sr-only">10% Complete (danger)</span>neutral'.($neutral).'%"; ?>
  </div>
</div>



</div>
</div>
</div>
</div>

';
}

?>
</div>
</div>
</html>