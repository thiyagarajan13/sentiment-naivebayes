<?php include 'navbar.php';?>
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
    <H1>List of forums<H1>
  </div>
</div>
  
</html>

   <?php
$self = $_SERVER['PHP_SELF'];               //check
$ipadress = ("$_SERVER[REMOTE_ADDR]");      //the way code is written 
include ('db.php');
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
$query = "SELECT forum_name,forum_desc FROM `phpbb_forums`";
$result = mysqli_query($connect,$query) or die('There was an unexpected error grabbing shouts from the database.');


$index=array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
     $index[] = $row;
}
for ($i=0; $i <count($index) ; $i++) { 

$var[$i]=$index[$i]['forum_name'];
$var1[$i]=$index[$i]['forum_desc'];
}
$z=0;
?>
<html>
<div class="bgimgg">
<div class="container">
<?php
for($z=0;$z<count($var1);$z++)
{
echo ' 
<div class="row">
  <div class="col-xs-18 col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="foldericon.png" alt="...">
      <div class="caption">
        <h3>'.($var[$z]).'</h3>
        <p>'.($var1[$z]).'</p>
        <p><a href="http://localhost/comm/forums/viewforum.php?f=3" class="btn btn-primary" role="button">Visit</a> <a href="http://localhost/comm/result.php?x='.($z+3).'" class="btn btn-default" role="button">Details</a></p>
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