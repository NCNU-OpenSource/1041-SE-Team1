<?php
require("conn.php");
?>
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
    echo" $status 還剩下 $h 小時 $m 分鐘 $s 秒可採收";
header("refresh: 1;url=showsecond.php?id=$id" ); 
?>
<input onclick="window.close();" value="關閉視窗" type="button">