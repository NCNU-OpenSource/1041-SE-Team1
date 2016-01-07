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
<img  id="storehouselist" src="picture\storehouselist.png" />

<div>
<a href><img  id="apple" src="picture\apple.png" / onclick=window.open('storehouselist.php?id=1','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="peanut" src="picture\peanut.png" / onclick=window.open('storehouselist.php?id=2','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="tomato" src="picture\tomato.png" / onclick=window.open('storehouselist.php?id=3','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" / onclick=window.open('storehouselist.php?id=4','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="grape" src="picture\grape.png" / onclick=window.open('storehouselist.php?id=5','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="corn" src="picture\corn.png" / onclick=window.open('storehouselist.php?id=6','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="mushroom" src="picture\mushroom.png" / onclick=window.open('storehouselist.php?id=7','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img  id="carrot" src="picture\carrot.png" / onclick=window.open('storehouselist.php?id=8','storehouselist.php',config='height=150px,width=500px;')></a>
<a href><img id="previouspage" src="picture\previouspage.png"/onclick=window.close('')><a>
<a href><img id="nextpage" src="picture\nextpage.png"/onclick=window.close('')><a>

</div>
</div>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>

</body>
</html>