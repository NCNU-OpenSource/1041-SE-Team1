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
 echo"<a href='unlock.php?id=$id'><button>確認!</button></a>" ;
 echo"<button   onclick=window.close()>取消</button>";
 ?> 
