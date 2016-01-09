<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>回復體力</title>
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


<hr />
<?php
require("conn.php");
?>
<?php


$nickname=$_SESSION['nk'];
$id=(int)$_POST["id"];


if ($id>0){
   
if($count==0){
    header("Location:food.php");
}

$name=mysqli_real_escape_string($conn,    $_POST['seed']   );
if($name==""){
    header("Location:shop.php");
}

$sql2 = "select * from food where  name='$name';";



$result2 = mysqli_query($conn,$sql2);
	
        
        if ($rs2=mysqli_fetch_array($result2)){//如果已有這項作物
            $name=$rs2['name'];
            
           
           
            $price=$rs2['price'];
            $power=$rs2['power'];//食物能恢復的體力
            $sqlmoney="select *from player where nickname='$nickname';";
            $resultmoney=mysqli_query($conn,$sqlmoney) ;
            $rsmoney=mysqli_fetch_array($resultmoney);
            $checkmoney=$rsmoney['money'];//這是玩家的錢,檢查玩家的錢夠不夠買
            $playerpower=$rsmoney['power'];//這是玩家現在的體力
            if(($playerpower+$power)<=100){
                $power=$playerpower+$power;
            }
            else{
                $power=100;
            }
            if($checkmoney>=$price){//如果玩家的錢夠買
               
            
                $sql4="update player set money=money-$price,power=$power where nickname='$nickname';";
                mysqli_query($conn,$sql4) or die("error4");
	            echo "恢復體力 $power !!!!";
            
                echo "花費 $price 元";
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
    
       
         
    
        
    
    
	
    
    
    
	
    
    
    
    
  
}
?>
</body>
</html>
