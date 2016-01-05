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
width:100px;
left:70px;
top:60px;
}
#food_colorbotton{
position:absolute;
width:100px;
left:180px;
top:67px;
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
#rice{
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
top:35px;	
}
</style>
<?php
require("conn.php");
?>
<div>
<img  id="shoplist" src="picture\shoplist.png" />
<img  id="seed_botton" src="picture\seed_botton.png" />
<a href=food.php><img  id="food_colorbotton" src="picture\food_colorbotton.png" /></a>
<div>
<img  id="apple" src="picture\apple.png" / onclick=window.open('itemlist.php?id=1','itemlist.php',config='height=100px,width=200px;')>
<a href><img  id="rice" src="picture\rice.png" / onclick=window.open('itemlist.php?id=2','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="tomato" src="picture\tomato.png" / onclick=window.open('itemlist.php?id=4','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" / onclick=window.open('itemlist.php?id=5','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="grape" src="picture\grape.png" / onclick=window.open('itemlist.php?id=6','itemlist.php',config='height=100px,width=200px;')></a>
</div>
</div>

</body>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
</html>