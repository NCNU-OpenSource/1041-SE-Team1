<?php
require("conn.php");
?>
<?php
$id=(int)$_GET['id'];
$sql="select * from land where id =$id;";
$results=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($results);
$money=$rs['money'];
$level=$rs['level'];
echo"解鎖土地需要等級 $level 金錢 $money ,確認解鎖?";
 echo"<button   onclick=window.open('unlock.php?id=$id','unlock.php',config='height=400,width=400')>確認!</button>" ;
?> 
<input onclick="window.close();" value="關閉視窗" type="button">