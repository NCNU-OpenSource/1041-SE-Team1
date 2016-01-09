<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
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
$id=(int)$_POST["id"];
$nickname=$_SESSION['nk'];
$sqlpower = "select * from player where  nickname='$nickname';";//查詢是否已種作物
$resultpower=mysqli_query($conn,$sqlpower);
$rspower=mysqli_fetch_array($resultpower);
$power=$rspower['power'];
if($power<10){
    echo("您的體力不足!!!");
    echo"<button   onclick=window.close()>取消</button>";
}
else{


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
        $second=time()+($time);
        $exp=$rs2['exp'];


	    if ($rs2) {
	    $sql = "update land set status='$seed',time='$time',seed='$name' , exp='$exp',ftime=$second where id=$id;";
	    mysqli_query($conn,$sql) or die("輸入錯誤1"); //執行SQL
   
    
	    echo "成功種植!!!!";
        $sql3 = "update seed set count=count-1 where name='$seed';";
	    mysqli_query($conn,$sql3) or die("輸入錯誤2"); //執行SQL
    
        $sql4 = "update player set power=power-10 where nickname='$nickname';";
	    mysqli_query($conn,$sql4) or die("輸入錯誤4"); //執行SQL
    
        } 
 
   } 
}
?>
<script type="text/javascript">
self.opener.location.reload(); //重新整理farm.php頁面
</script>
</div>
</body>
</html>
