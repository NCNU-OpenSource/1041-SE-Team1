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
#seed_colorbotton{
position:absolute;
width:100px;
left:70px;
top:67px;
}
#food_botton{
position:absolute;
width:100px;
left:180px;
top:60px;
}
#buy{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#cake{
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
#hot{
position:absolute;
width:90px;
left:500px;
top:180px;
}
#hambuger{
position:absolute;
width:80px;
left:100px;
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
<a href=shop.php><img  id="seed_colorbotton" src="picture\seed_colorbotton.png" /></a>
<img  id="food_botton" src="picture\food_botton.png" />
<div>
<img  id="cake" src="picture\cake.jpg" /onclick=window.open('foodlist.php?id=4','foodlist.php',config='height=100px,width=200px;')>
<a href><img  id="rice" src="picture\rice.jpg" /onclick=window.open('foodlist.php?id=3','foodlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="hot" src="picture\hot.jpeg" /onclick=window.open('foodlist.php?id=2','foodlist.php',config='height=100px,width=300px;')></a>
<a href><img  id="hambuger" src="picture\hambuger.png" /onclick=window.open('foodlist.php?id=1','foodlist.php',config='height=100px,width=300px;')></a>

</div>
</div>

<?php


?>
</body>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
</html>