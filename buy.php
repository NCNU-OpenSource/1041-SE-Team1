<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購買種子</title>
</head>

<body>

<p>購買...</p>
<hr />
<?php
require("conn.php");
?>
<?php


$nickname=$_SESSION['nk'];
$id=(int)$_POST["id"];


$count=$_POST['count'];



if ($id>0){
   
if($count==0){
    header("Location:shop.php");
}

$seed=mysqli_real_escape_string($conn,    $_POST['seed']   );
if($seed==""){
    header("Location:shop.php");
}

$sql2 = "select * from seed where  name='$seed';";




	if ($result2 = mysqli_query($conn,$sql2)) {
        
        if ($rs2=mysqli_fetch_array($result2)){//如果已有這項作物
            $money=$rs2['money'];
            $time=$rs2['time'];
            $name=$rs2['name'];
            $exp=$rs2['exp'];
            $cost=$money*$count;//這是購買種子花費的錢
            $sqlmoney="select money from player where nickname='$nickname';";
            $resultmoney=mysqli_query($conn,$sqlmoney) ;
            $rsmoney=mysqli_fetch_array($resultmoney);
            $checkmoney=$rsmoney['money'];//這是玩家的錢,檢查玩家的錢夠不夠買
            if($checkmoney>=$cost){//如果玩家的錢夠買
                $sql = "update seed set count=count+$count where id=$id;";
	            mysqli_query($conn,$sql) or die("輸入錯誤1"); //執行SQL
            
            $sql4="update player set money=money-$cost where nickname='$nickname';";
            mysqli_query($conn,$sql4) or die("error4");
	        echo "成功購買!!!!";
            echo " $name x $count";
            echo "總共是 $cost 元";
            ?>
            <script type="text/javascript">
                self.opener.location.reload(); //重新整理farm.php頁面
            </script>
            <?php
            echo"<a href=shop.php>回商店</a>";
            }
            else{
                echo"您的錢不夠!!";
                echo"<a href=shop.php>繼續</a>";
    
            }
        }
    
        else{//還沒買過
            
            $sql3 = "select * from shop where  id=$id;";
            $result3 = mysqli_query($conn,$sql3);
            $rs3=mysqli_fetch_array($result3);
            $time=$rs3['time'];
            $name=$rs3['name'];
            $exp=$rs3['exp'];
            $money=$rs3['money'];
            $level=$rs3['level'];
            $sold=$rs3['sold'];
            $cost=$money*$count;//這是購買種子花費的錢
            $sqlmoney="select money from player where nickname='$nickname';";
            $resultmoney=mysqli_query($conn,$sqlmoney) ;
            $rsmoney=mysqli_fetch_array($resultmoney);
            $checkmoney=$rsmoney['money'];//這是玩家的錢,檢查玩家的錢夠不夠買
            if($checkmoney>=$cost){//如果玩家的錢夠買
            $sql8="insert  into seed (id,name,time,money,sold,level,count,exp)  values($id,'$name',$time,$money,$sold,$level,$count,$exp);";
            mysqli_query($conn,$sql8) or die("error8");
            $sql5="update player set money=money-$cost where nickname='$nickname';";
            mysqli_query($conn,$sql5) or die("error5");
	        echo "成功購買!!!!";
            echo " $name x $count";
            echo "總共是 $cost 元";           
            ?>
            <script type="text/javascript">
                self.opener.location.reload(); //重新整理farm.php頁面
            </script>
            <?php
            echo"<a href=shop.php>回商店</a>";
            }
            else{
                echo"您的錢不夠!!";
                echo"<a href=shop.php>回商店</a>";
    
            }
        }
    
    
	
    
    
    }
	
    
    
    
    
 } 

?>
</body>
</html>
