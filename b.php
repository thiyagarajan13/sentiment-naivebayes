
<?php include 'navbar.php';?>
<html>
<body background="backk.jpg">
	<br><br>
	<div class="jumbotron">
  <h1>PROVIDE YOUR REVIEW HERE</h1>
  <p>Please make sure the review is clear and use concise words to explain your view and opinion!</p>
</div>
<form action="pmi.py" method="POST">
	<center><textarea rows="7" cols="80" name="feed"></textarea></center>
	<br>
	<center><input type="submit" value="submit" class="btn btn-primary btn-lg"></center>
	</form>
</body>
</html>