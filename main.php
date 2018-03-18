

<html>
<head>
    <link rel="stylesheet" type="text/css" href="MAINCSS.CSS">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrapcss/bootstrap-theme.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Welcome</title>
</head>

<body class="BACK">

    <center>
        <h1>
            <center>
                <div class="long-shadow">Welcome to our community</div>
                <link async href="http://fonts.googleapis.com/css?family=Fredoka%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css" />
                <link async href="http://fonts.googleapis.com/css?family=Coda" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css" />
            </center>
        </h1>

        <div class="LOGIN">LOG IN</div>
        <form action="forums/ucp.php?mode=login" method="post" id="navloginform" name="loginform">
            <input class="input" placeholder="Username" name="username"/>
            </br>
            </br><input class="input" type="password" placeholder="Password" name="password" />
            </br>
            </br><input type="submit" class="button" value="DONE" name="login" />
            <input type="hidden" name="redirect" value="http://localhost/comm/reviewhome.php" /></form>
    </center><br><br><br><br><br><br>
    <div class="LOGIN">
        <p>
            New here? join our community today!</p>
<form action="http://localhost/comm/forums/ucp.php?mode=register">
<input type="submit" class="button" name="register" value="REGISTER">
</form>





        
        <BR>
        <BR>
        <form action="submit.php" method="POST" class="elegant-aero">
            <h1>Sign up down here!<span>Please fill all the texts in the fields.</span></h1>
            <p><label><span>Your Name :</span><input id="name" type="text" name="name" placeholder="Your Full Name">
</label><label><span>Your Email :</span>
<input id="email" type="text" name="email" placeholder="Valid Email Address"></label>
                <label><span>Password</span>
<input id="password" type="password" name="password"></label>
                <label><span>Re-enter Password</span>
<input id="rpassword" type="password" name="rpassword"></label>
                <label><span>Occupaton :</span>     
    <select name="selection"><option value="student">Student</option>
    <option value="faculty">Faculty</option></select></label><label><span>&nbsp;</span>
    <input type="submit" class="button" value="Submit"></label></p>
        </form>

</body>

</html>