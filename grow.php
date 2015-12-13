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
    


$seed=mysqli_real_escape_string($conn,    $_POST['seed']   );
$sql2 = "select * from seed where id name='$status';";
$result2=mysqli_query($conn,$sql);
$rs2=mysqli_fetch_array($result2);
$time=$rs2['time'];

	if ($seed) {
	$sql = "update land set status='$seed',time='$time' where id=$id;";
	mysqli_query($conn,$sql) or die("輸入錯誤"); //執行SQL
   
    
	echo "成功種植!!!!";
    
    echo"<a href=farm.php>繼續</a>";
 } 
 
 } 
?>
</body>
</html>
//
