<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="UTF-8"/>
</head>
<body>
<!--div id="header">
<a>Pan Tadeusz</a>
</div>
<div id="side bar">
</div>
<div id="content">
</div>
<div id="footer">
</div> -->
<p>Spis treści</p>
	<ul>
        <?php
        	for ($i=1; $i <=12 ; $i++) { 
        		echo "<li><a href='./index.php?ksiega=$i'>Ksiega $i</a></li>";
        	}
        	if (!empty($_GET)) {
        		$k = $_GET['ksiega'];
        		include_once("./k$k.html");
        	}	


        ?>
	</ul>
</body>
</html>
