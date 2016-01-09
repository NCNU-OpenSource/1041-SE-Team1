<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#content{
position:relative;
width:38px;
height:17px;
}
#detail{
position:relative;
left:40px;
top:30px;
font-size:15px;
text-align:center;

}


</style>
<title>商店</title>
</head>

<body>
<div id="content" >
<img  src="picture\lock.png" />
</div>
<?php
require("conn.php");
?>
<div id="detail">
<?php
$id=(int)$_GET['id'];
$sql="select * from land where id =$id;";
$results=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($results);
$money=$rs['money'];
$level=$rs['level'];
echo"解鎖土地需要等級 $level 金錢 $money ,確認解鎖?";
echo"  ";
echo"<a href='unlock.php?id=$id'><button>確認</button></a>" ;
echo"<button   onclick=window.close()>取消</button>";
 ?> 
</div>

</body>
