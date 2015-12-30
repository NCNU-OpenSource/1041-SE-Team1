<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的農場</title>
</head>

<body>
<style type="text/css">
#content{
position:relative;
background-image: url(farm.jpg);
width: 750px;
height: 500px;
left: 280px;
top: 50px;
opacity:0.9;
}
}
#intro{
color:brown;
width:700px;
height:450px;
left: 280px;
top: 50px;
text-align:center ;
padding:20px;
}
#shop{
position:absolute;
right:490px;
top:150px;
}
#land{
position:absolute;
left:300px;
top:280px;
}
</style>
<?php
require("conn.php");
?>
<?php


$uid=$_SESSION['uID'];
$sql2="select * from `player` where id ='$uid';";
$results2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($results2);
$_SESSION['nk']=$rs2['nickname'];
$power=$rs2['power'];
$LV=$rs2['LV'];
$playermoney=$rs2['money'];
$exp1=$rs2['exp1'];
$exp2=$rs2['exp2'];
$sql3="select * from `land` where id ='$uid';";
$results3=mysqli_query($conn,$sql3);
$rs3=mysqli_fetch_array($results3);
$nickname=$_SESSION['nk'];
if($_SESSION['nk']==""){
header("Location:playerlogin.php");
}
?>
<div id="content">
<div id="intro">
<p><?php  echo $_SESSION['nk'] ;?>LV:<?php  echo $LV;?>,體力值剩餘:<?php echo $power ;?>金錢剩餘:<?php echo $playermoney ;?>,經驗值:<?php echo $exp1 ;?>,升級還需經驗值:<?php echo $exp2 ;?></p>
</div>


<div id="land">
<?php
    if($exp1>=$exp2){
        $exp1=$exp1-$exp2;
        $exp2+=400;
        $sqllevelup="update player set exp1=$exp1,exp2=$exp2,LV=LV+1 where nickname='$nickname';";
        mysqli_query($conn,$sqllevelup) or die("errorLevelup"); //執行SQL    
    
    
    }
    $count=0;
    $hour1=time();//使用者查看秒數
    $sql4="select * from `land` ;";
    $results4=mysqli_query($conn,$sql4);
while($rs4=mysqli_fetch_array($results4)){
    
   
    $count++;
    if($count%4==0){
        echo"</br>";
    }
    $status=$rs4['status'];
    $money=$rs4['money'];
    $level=$rs4['level'];
   
    $ftime=$rs4['ftime'];//作物完成時間秒數
    $time=$ftime-$hour1;//作物完成時間減去使用者查看時間秒數(作物剩餘時間)
    if($time<=0){
        $h=0;//已完成
        $m=0;
        $s=0;
        if($ftime!=0){
            $sqlf = "update land set status='可採收' where id=$count;";
	        mysqli_query($conn,$sqlf) or die("輸入錯誤1"); //執行SQL
        }
    }
    else{
        $h=floor($time/3600);//幾小時
        $time=$time-($h*3600);
        $m=floor($time/60);//幾分
        $time=$time-($m*60);
        $s=$time%60;//幾秒
    }
    if($status=="尚未解鎖"){
        echo" <img src='lockland.png'/ onclick=window.open('land.php?id=$count','land.php',config='height=100,width=200')>" ;
        
    }
    else if($status=="空地"){
        echo "<img src='land.png' / onclick=window.open('seed.php?id=$count','seed.php',config='height=500,width=400')>";
    }
    else {
        
        if($status=="可採收"){
           echo" <img src='treeland.png' /onclick=window.open('flower.php?id=$count','flower.php',config='height=400,width=400')>" ;
        }
        else{
            echo"<img src='growland.png' / onclick=window.open('showsecond.php?id=$count','showsecond.php',config='height=100,width=400')>" ;
            
        
             
        
        }
        
        
    }
    
    
    
}

    
    
 
    

?>
</div>
</table>

<div id="shop">

<img src="shop.png" alt="商店" title="商店"/ onclick=window.open('shop.php','shop.php',config='height=300,width=500')>
</div>
</body>
</html>
</div>