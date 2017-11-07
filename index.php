<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<style>
p {
	font-size: 40px;
}
button {
	margin-left: 30px;
}

header {
	margin-bottom: 30px;
	margin-top: 10px;
}
table {
	text-align: center;
	border: 1px solid #6396C9;
	width: 100%;
	height: 50px;
	background-color: #9fcaf5;
}
.list-group-item {
	border: 1px solid #98C6F5;
	background-color: #E6EEF7;
}
footer {
	text-align: center;
	font-size: 30px;
	padding-bottom: 20px;
	color: #990000;
}
#menu {
	margin: 0px;
	padding: 0px;
}
#str_gl {
	margin: 0px;
	padding: 0px;
}
#foto {
	width: 100%;
}
</style>
<body>
	<header class="container" align="center">
		<h1>Pan Tadeusz, czyli ostatni zajazd na Litwie.<br>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
	</header>	
	<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" align="center" id="menu">
			<div class="list-group">
			<table>
				<tr>
					<td><a href="./index.php">Strona główna</a></td>
				</tr>	
			</table>
			<table>
				<tr>
					<td>Spis treści</td>
				</tr>
			</table>
			<?php
        		for ($i=1; $i <=12 ; $i++) { 
        		echo " <a href='./index.php?ksiega=$i' class='list-group-item'>Ksiega $i</a>";			  }
        	?>	
           </div>
		</div>

		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<?php if (!empty($_GET)) {
        		$k = $_GET['ksiega'];
        		include_once("./k$k.html");
        	}
        	else 
        	echo "<img src='./pantadeusz.png' id='foto'"; ?>		
		</div>
	</div>
	</div>
	<footer class="container">(c) Konrad Marszałek, UEK</footer>
</body>
</html>
