<!doctype html>
<html>
<head>
<title>PHP Code Highlighter</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/css.css">
</head>
<body>
	<h1 align="center">
		PHP Code Highlighter<sub><a href="http://www.tekinaydogdu.info"
			target="__blank">By Tekin Aydoğdu</a></sub>
	</h1>
	<div class="page">
<?php
require_once 'class.php';
$syntax = new sytax_highlighter("text.txt");

?>
</div>
</body>
</html>
