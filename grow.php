<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Grow...</p>
<hr />
<?php
require("conn.php");
?>
<?php
$id=(int)$_POST["id"];





if ($id>0){
    
$sqlland = "select * from land where  id=$id;";//查詢是否已種作物
$resultland=mysqli_query($conn,$sqlland);
$rsland=mysqli_fetch_array($resultland);
$status=$rsland['status'];

$seed=mysqli_real_escape_string($conn,    $_POST['seed']   );
if($seed==""){
    header("Location:seed.php?id=$id");
}
$sql2 = "select * from seed where  name='$seed';";
$result2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($result2);
$time=$rs2['time'];
$name=$rs2['name'];
$second=time()+($time*3600);
$exp=$rs2['exp'];


	if ($rs2) {
	$sql = "update land set status='$seed',time='$time',seed='$name' , exp='$exp',ftime=$second where id=$id;";
	mysqli_query($conn,$sql) or die("輸入錯誤1"); //執行SQL
   
    
	echo "成功種植!!!!";
    $sql3 = "update seed set count=count-1 where name='$seed';";
	mysqli_query($conn,$sql3) or die("輸入錯誤2"); //執行SQL
    
    
    echo"<a href=farm.php>繼續</a>";
 } 
 
 } 
?>
</body>
</html>