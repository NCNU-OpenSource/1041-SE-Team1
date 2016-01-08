<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的倉庫</title>
</head>

<body>



<style type="text/css">
#shoplist{
position:relative;

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
#corn{
position:absolute;
width:110px;
left:430px;
top:160px;
}
#tomato{
position:absolute;
width:100px;
left:575px;
top:165px;
}
#green_pepper{
position:absolute;
width:80px;
left:130px;
top:290px;
}
#grape{
position:absolute;
width:95px;
left:285px;
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
#word{
font-size:25px;
font-weight: bold;	
font-family:arial;
}
#apple_word{
position:absolute;
left:140px;
top:250px;	
}
#peanut_word{
position:absolute;
left:295px;
top:248px;	
}
#corn_word{
position:absolute;
left:455px;
top:252px;	
}
#tomato_word{
position:absolute;
left:610px;
top:253px;	
}
#green_pepper_word{
position:absolute;
left:135px;
top:390px;	
}
#grape_word{
position:absolute;
left:300px;
top:390px;	
}
#mushroom_word{
position:absolute;
left:460px;
top:390px;	
}
#carrot_word{
position:absolute;
left:610px;
top:390px;	
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
</style>
<?php
require("conn.php");
?>

<div>
<img  id="storehouselist" src="picture\storehouselist.png" />

<div>
<a href><img  id="apple" src="picture\apple.png" / onclick=window.open('storehouselist.php?id=1','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="peanut" src="picture\peanut.png" / onclick=window.open('storehouselist.php?id=2','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="corn" src="picture\corn.png" / onclick=window.open('storehouselist.php?id=3','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="tomato" src="picture\tomato.png" / onclick=window.open('storehouselist.php?id=4','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" / onclick=window.open('storehouselist.php?id=5','storehouselist.php',config='height=350px,width=500px;')></a>
<a href><img  id="grape" src="picture\grape.png" / onclick=window.open('storehouselist.php?id=6','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="mushroom" src="picture\mushroom.png" / onclick=window.open('storehouselist.php?id=7','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img  id="carrot" src="picture\carrot.png" / onclick=window.open('storehouselist.php?id=8','storehouselist.php',config='height=150px,width=350px;')></a>
<a href><img id="previouspage" src="picture\previouspage.png"><a>
<a href><img id="nextpage" src="picture\nextpage.png"><a>
</div>
<div id="word">
<div id="apple_word">
蘋果
</div>
<div id="peanut_word">
花生
</div>
<div id="corn_word">
玉米
</div>
<div id="tomato_word">
番茄
</div>
<div id="green_pepper_word">
青椒
</div>
<div id="grape_word">
葡萄
</div>
<div id="mushroom_word">
香菇
</div>
<div id="carrot_word">
紅蘿蔔
</div>
</div>
</div>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>

</body>
</html>