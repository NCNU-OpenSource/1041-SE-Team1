
<?php
require("conn.php");
?>
<style type="text/css">
#content{
position:relative;
background-image: url(sign.jpg);
width:500px;
height:425px;
}
#show{
position:absolute;
left:110px;
top:180px;
font-size:25px;
font-weight: bold;
}
#close{
position:absolute;
width:30px;
left:380px;
top:168px;	
}
</style>
<div id=content >
<?php
$id=(int)$_GET['id'];
$hour1=time();//使用者查看秒數
$sql4="select * from land where id=$id;";
$results4=mysqli_query($conn,$sql4);
$rs4=mysqli_fetch_array($results4);
$ftime=$rs4['ftime'];//作物完成時間秒數
$time=$ftime-$hour1;//作物完成時間減去使用者查看時間秒數(作物剩餘時間)
$status=$rs4['status'];
if($time<=0){
    $h=0;//已完成
    $m=0;
    $s=0;        
}
else{
    $h=floor($time/3600);//幾小時
    $time=$time-($h*3600);
    $m=floor($time/60);//幾分
    $time=$time-($m*60);
    $s=$time%60;//幾秒
    }
?>
<div id=show>
<?php
    echo" $status 還剩下:" ;
    echo"</br>";
    echo" $h 小時 $m 分鐘 $s 秒可採收";
    echo"</br>";
?>
</div>
<?php   
header("refresh:1;url=showsecond.php?id=$id" ); 
?>
</div>
<a href="farm.php"><img id="close" src="picture\close.png"/onclick=window.close()><a>
