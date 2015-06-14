<?php include "konek.php"; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<title>tri setioko</title>


<body>
<div class="wrap">

	
	<div class="header">
		<center><img src="img/HD_2.jpg" height="150" width="1200" alt="image" /></center>
		
	</div>
	<div class="menu">
	<ul div="nav">
		<li><a href="home.php">HOME</a></li>
		<li><a href="menu.php">MENU</a></li>
		<li><a href="order.php">ORDER ONLINE</a></li>
		<li><a href="contact.php">CONTAC US</a></li>
	<li>
	</ul>
	</div>

	<div class="content">
	<div class="content3">
	<center>
	<form method="post" action="cek_login.php">
	<br><br>
			Username : <input type="text" placeholder="Username.." name="username"/><br><p>
			Password : <input type="password" placeholder="Password.." name="password"/><p>
			<input type="submit" name="login" value="Login"/>
	</center>
	</form>
	</div>
	</div>

	<div class="footer">
	copyright@trisetioko
	</div>
</div>

</body>
</html>