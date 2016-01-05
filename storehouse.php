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
top:25px;	
}
</style>
<?php
require("conn.php");
?>

<div>
<img  id="storehouselist" src="picture\storehouselist.png" />

<div>
<img  id="apple" src="picture\apple.png" / onclick=window.open('storehouselist.php?id=3','storehouselist.php',config='height=100px,width=200px;')>
<a href><img  id="rice" src="picture\rice.png" / onclick=window.open('storehouselist.php?id=2','storehouselist.php',config='height=100px,width=200px;')></a>
<a href><img  id="tomato" src="picture\tomato.png" / onclick=window.open('storehouselist.php?id=4','storehouselist.php',config='height=100px,width=200px;')></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" / onclick=window.open('storehouselist.php?id=5','storehouselist.php',config='height=100px,width=200px;')></a>
<a href><img  id="grape" src="picture\grape.png" / onclick=window.open('storehouselist.php?id=6','storehouselist.php',config='height=100px,width=200px;')></a>
</div>
</div>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>

</body>
</html>