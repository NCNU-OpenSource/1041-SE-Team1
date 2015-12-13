<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的農場</title>
</head>

<body>
<style type="text/css">
#intro{
background-image: url(grass.jpg);
color:brown;
height:50px;
text-align:center ;
padding:20px;
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
$exp=$rs2['exp1'];
$exp2=$rs2['exp2'];
$sql3="select * from `land` where id ='$uid';";
$results3=mysqli_query($conn,$sql3);
$rs3=mysqli_fetch_array($results3);
if($_SESSION['nk']==""){
header("Location:playerlogin.php");
}
?>
<div id="intro">
<p>開心農場 !! <?php  echo $_SESSION['nk'] ;?>您好!LV:<?php  echo $LV;?>,體力值剩餘:<?php echo $power ;?>金錢剩餘:<?php echo $playermoney ;?>,經驗值:<?php echo $exp ;?>,升級還需經驗值:<?php echo $exp2 ;?></p>
</div>
<hr />


<?php
$count=0;
$hour1=date("H");
$hour2=date("H")+1;
function countdown($x){
    $x--;
    return $x;
}


for($i=0;$i<5;$i++){
   
    $count++;
    $sql4="select * from `land` where id ='$count';";
    $results4=mysqli_query($conn,$sql4);
    $rs4=mysqli_fetch_array($results4);
    $status=$rs4['status'];
    $money=$rs4['money'];
    $level=$rs4['level'];
    $time=$rs4['time'];
    if($status=="尚未解鎖"){
        echo"<button   onclick='return confirm(\"解鎖需要等級:$level,金錢:$money,確認解鎖?\");'><a href=unlock.php?id=$count?>$status </a> </button>" ;
        
    }
    else if($status=="空地"){
        echo"<button   onclick=window.open('seed.php?id=$count','種植作物')>$status   </button>" ;
    }
    else{
        echo"<button>$status</button>" ;
        echo"還剩 $time 個小時";
        
        
        
        
    }
    
    
}

    
    
 
    

?>

</table>
</body>
</html>
