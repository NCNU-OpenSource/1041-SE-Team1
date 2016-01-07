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
width:90px;
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
width:83px;
left:430px;
top:283px;
}
#chicken{
position:absolute;
width:110px;
left:570px;
top:290px;
}
#previouspage{
position:absolute;
width:40px;
left:50px;
top:245px;
}
#nextpage{
position:absolute;
width:40px;
left:695px;
top:245px;
}

#close{
position:absolute;
width:50px;
left:650px;
top:35px;	
}
#word{
font-size:25px;
font-weight: bold;	
font-family:arial;
}
#cake_word{
position:absolute;
left:140px;
top:250px;	
}
#rice_word{
position:absolute;
left:285px;
top:248px;	
}
#chocolate_word{
position:absolute;
left:435px;
top:246px;	
}
#popcorn_word{
position:absolute;
left:590px;
top:246px;	
}
#hambuger_word{
position:absolute;
left:135px;
top:390px;	
}
#riceball_word{
position:absolute;
left:290px;
top:390px;	
}
#milk_word{
position:absolute;
left:450px;
top:390px;	
}
#chicken_word{
position:absolute;
left:610px;
top:390px;	
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
<a href><img  id="cake" src="picture\cake.png" /onclick=window.open('foodlist.php?id=1','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="rice" src="picture\rice.png" /onclick=window.open('foodlist.php?id=2','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="chocolate" src="picture\chocolate.png" /onclick=window.open('foodlist.php?id=3','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="popcorn" src="picture\popcorn.png" /onclick=window.open('foodlist.php?id=4','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="hambuger" src="picture\hambuger.png" /onclick=window.open('foodlist.php?id=5','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="riceball" src="picture\riceball.png" /onclick=window.open('foodlist.php?id=6','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="milk" src="picture\milk.png" /onclick=window.open('foodlist.php?id=7','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img  id="chicken" src="picture\chicken.png" /onclick=window.open('foodlist.php?id=8','foodlist.php',config='height=150px,width=500px;')></a>
<a href><img id="previouspage" src="picture\previouspage.png"><a>
<a href><img id="nextpage" src="picture\nextpage.png"><a>
</div>
<div id="word">
<div id="cake_word">
蛋糕
</div>
<div id="rice_word">
滷肉飯
</div>
<div id="chocolate_word">
巧克力
</div>
<div id="popcorn_word">
爆米花
</div>
<div id="hambuger_word">
漢堡
</div>
<div id="riceball_word">
飯糰
</div>
<div id="milk_word">
牛奶
</div>
<div id="chicken_word">
烤雞
</div>
</div>
<div>

</div>
</div>

<?php


?>
</body>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
</html>