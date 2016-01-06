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
left:120px;
top:160px;
}
#peanut{
position:absolute;
width:110px;
left:260px;
top:155px;
}
#tomato{
position:absolute;
width:110px;
left:430px;
top:160px;
}
#green_pepper{
position:absolute;
width:75px;
left:595px;
top:150px;
}
#grape{
position:absolute;
width:95px;
left:130px;
top:300px;
}
#corn{
position:absolute;
width:105px;
left:280px;
top:300px;
}
#mushroom{
position:absolute;
width:100px;
left:440px;
top:300px;
}
#carrot{
position:absolute;
width:100px;
left:590px;
top:310px;
}
#previouspage{
position:absolute;
width:40px;
left:70px;
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
</style>
<?php
require("conn.php");
?>
<div>
<img  id="shoplist" src="picture\shoplist.png" />
<img  id="seed_botton" src="picture\seed_botton.png" />
<a href=food.php><img  id="food_colorbotton" src="picture\food_colorbotton.png" /></a>
<div>
<a href><img  id="apple" src="picture\apple.png" / onclick=window.open('itemlist.php?id=1','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="peanut" src="picture\peanut.png" / onclick=window.open('itemlist.php?id=2','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="tomato" src="picture\tomato.png" / onclick=window.open('itemlist.php?id=4','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" / onclick=window.open('itemlist.php?id=5','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="grape" src="picture\grape.png" / onclick=window.open('itemlist.php?id=6','itemlist.php',config='height=100px,width=200px;')></a>
<a href><img  id="corn" src="picture\corn.png" / onclick=window.open('')></a>
<a href><img  id="mushroom" src="picture\mushroom.png" / onclick=window.open('')></a>
<a href><img  id="carrot" src="picture\carrot.png" / onclick=window.open('')></a>
<a href><img id="previouspage" src="picture\previouspage.png"/onclick=window.close('')><a>
<a href><img id="nextpage" src="picture\nextpage.png"/onclick=window.close('')><a>
</div>
</div>

</body>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
</html>