<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>
<style type="text/css">
#shoplist{
position:relative;

}
#seed_botton{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#food_botton{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#buy{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#apple{
position:absolute;
width:100px;
left:100px;
top:180px;
}
#peanut{
position:absolute;
width:100px;
left:300px;
top:170px;
}
#tomato{
position:absolute;
width:90px;
left:500px;
top:180px;
}
#green_pepper{
position:absolute;
width:80px;
left:100px;
top:340px;
}
#grape{
position:absolute;
width:65px;
left:300px;
top:340px;
}
#close{
position:absolute;
width:50px;
left:650px;
top:115px;	
}
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