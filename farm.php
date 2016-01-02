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
width: 770px;
height: 550px;
left: 280px;
top: 50px;
opacity:0.9;
}
#intro{
position:relative;
color:black;
font-size:16px;
font-weight:bold;
width:700px;
height:450px;
left:70px;
top: 5px;
text-align:left;
padding:20px;
}
#shop{
position:absolute;
right:580px;
top:300px;
}
#land{
position:absolute;
left:245px;
top:330px;
}
#player{
position:absolute;
width:55px;
left:20px;
top:10px;
}
#farmer{
position:absolute;
left:300px;
top:150px;
}
#storehouse{
position:absolute;
left:580px;
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
$totalexp=$rs2['totalexp'];;
$sql3="select * from `land` where id ='$uid';";
$results3=mysqli_query($conn,$sql3);
$rs3=mysqli_fetch_array($results3);
$nickname=$_SESSION['nk'];

if($_SESSION['nk']==""){
header("Location:playerlogin.php");
}
?>
<div id="content">
<img  id="player" src="picture\player.png" />
<div id="intro">
<?php  echo $_SESSION['nk'] ;?> LV:<?php  echo $LV;?> Money:<?php echo $playermoney ;?></br>
Energy:<?php echo $power ;?> </br>
Exp:<?php echo $exp1 ;?>/<?php echo $exp2 ;?></br>
Totalexp:<?php echo $totalexp ;?>
<!--升級還需經驗值:<?php echo $exp2 ;?></br>-->
</div>

<div id="land">
<?php
    if($exp1>=$exp2){
        
        $totalexp+=$exp2;
        $exp1=$exp1-$exp2;
        $exp2+=200;
        
        $sqllevelup="update player set exp1=$exp1,exp2=$exp2,LV=LV+1,totalexp=$totalexp where nickname='$nickname';";
        mysqli_query($conn,$sqllevelup) or die("errorLevelup"); //執行SQL    
        ?>
        <script type="text/javascript">
            window.alert("升級囉!!!");
            
        </script>
        <?php
    }
    $totalexp=$totalexp+$exp1;
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
        echo" <a href><img src='picture\lockland.png'/ onclick=window.open('land.php?id=$count','land.php',config='height=100,width=200')></a>" ;
        
    }
    else if($status=="空地"){
        echo "<a href><img src='picture\land.png' / onclick=window.open('seed.php?id=$count','seed.php',config='height=500,width=400')></a>";
    }
    else {
        
        if($status=="可採收"){
           echo" <a href><img src='picture\growland.png' /onclick=window.open('flower.php?id=$count','flower.php',config='height=400,width=400')></a>" ;
        }
        else{
            echo"<a href><img src='picture\seedland.png' / onclick=window.open('showsecond.php?id=$count','showsecond.php',config='height=100,width=400')></a>" ;
        }
        
        
    }
    
    
    
}
    
    
 
    
?>
</div>
</table>

<a href="shop.php"><img id="shop" src="picture\shop.png"></a>
<!--<img src="picture\shop.png" alt="商店" title="商店"/ onclick=window.open('shop.php','shop.php',config='height=300,width=500')>-->
<div id="farmer">
<img  src="picture\farmer.png" />
</div>

<a href="storehouse.php"><img id="storehouse" src="picture\storehouse.png"></a>
<!--<img src="picture\storehouse.png" alt="倉庫" title="倉庫"/ onclick=window.open('storehouse.php','storehouse.php',config='height=300,width=500')>-->
<br/>
<div id="storehouse">
<?php
//show出物品清單

$sqlitem="select * from seed where count>0;";
$resultitem=mysqli_query($conn,$sqlitem);
$rsitem=mysqli_fetch_array($resultitem);
while($rsitem=mysqli_fetch_array($resultitem)){
    echo $rsitem['name'];
    echo"x";
    echo $rsitem['count'];

}

?>
</div>
</div>
</body>
</html>
</div>
