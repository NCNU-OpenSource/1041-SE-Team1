<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>
<style type="text/css">

</style>
<?php
require("conn.php");
?>
<div>
<img  id="shoplist" src="picture\shoplist.png" />


<div>
<a href ><img  id="apple" src="picture\apple.png" /onclick=window.open('testshop.php?id=apple','testshop.php',config='height=200,width=300')></a>
<a href><img  id="peanut" src="picture\peanut.png" /></a>
<a href><img  id="tomato" src="picture\tomato.png" /></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" /></a>
<a href><img  id="grape" src="picture\grape.png" /></a>
</div>
</div>
<?php


?>

</body>
<a href="farm.php"><img id="close" src="picture\close.png"><a>
</html>