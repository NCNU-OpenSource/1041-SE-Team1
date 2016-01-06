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
width:110px;
left:110px;
top:150px;
}
#rice{
position:absolute;
width:110px;
left:265px;
top:150px;
}
#chocolate{
position:absolute;
width:120px;
left:420px;
top:160px;
}
#popcorn{
position:absolute;
width:65px;
left:595px;
top:145px;
}
#hambuger{
position:absolute;
width:95px;
left:120px;
top:300px;
}
#riceball{
position:absolute;
width:95px;
left:270px;
top:295px;
}
#milk{
position:absolute;
width:85px;
left:430px;
top:280px;
}
#chicken{
position:absolute;
width:110px;
left:570px;
top:290px;
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
<img  id="cake" src="picture\cake.png" /onclick=window.open('foodlist.php?id=4','foodlist.php',config='height=100px,width=200px;')>
<a href><img  id="rice" src="picture\rice.png" /onclick=window.open('foodlist.php?id=3','foodlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="chocolate" src="picture\chocolate.png" /onclick=window.open()></a>
<a href><img  id="popcorn" src="picture\popcorn.png" /onclick=window.open()></a>
<a href><img  id="hambuger" src="picture\hambuger.png" /onclick=window.open('foodlist.php?id=1','foodlist.php',config='height=100px,width=300px;')></a>
<a href><img  id="riceball" src="picture\riceball.png" /onclick=window.open()></a>
<a href><img  id="milk" src="picture\milk.png" /onclick=window.open()></a>
<a href><img  id="chicken" src="picture\chicken.png" /onclick=window.open()></a>
</div>

<div>

</div>
</div>

<?php


?>
</body>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
</html>