<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>解鎖土地</title>
<style type="text/css">
#content{
position:relative;
height:325px;
top:8px;
}
#detail{
position:absolute;
top:45px;
left:75px;
font-size:15px;
font-weight:bold;
text-align:center;
}
</style>
</head>

<body>

<div id="content">
<img  src="picture\sure.jpg" />
</div>
<div id="detail">
<?php
require("conn.php");
?>
<?php

$nickname=$_SESSION['nk'];
$id=(int)$_GET['id'];
$sql = "select * from land where id=$id;";
$result=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($result);
$level=$rs['level'];
$cost=$rs['money'];
$sql2 = "select * from player where nickname='$nickname';";
$result2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($result2);
$LV=$rs2['LV'];
$playermoney=$rs2['money'];


if ($LV>=$level && $playermoney>=$cost) {
    $sql3 = "update player set money=money-$cost where nickname='$nickname';";
    mysqli_query($conn,$sql3) or die("MySQL query error3"); //執行SQL
	$sql4 = "update land set status='空地' where id=$id;";
    
	mysqli_query($conn,$sql4) or die("MySQL query error4"); //執行SQL
    echo"成功解鎖土地!!";
    echo"花費 $cost 元";
	?>
    <script type="text/javascript">
        self.opener.location.reload(); //重新整理farm.php頁面
    </script>
    <?php
    
	
    
} else {
    echo "等級金錢不足!!!.";
    
  }
  
?>
</body>
</div>
</html>
