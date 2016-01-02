<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出售</title>
</head>

<body>

<p>販賣...</p>
<hr />
<?php
require("conn.php");
?>
<?php


$nickname=$_SESSION['nk'];



$count=$_POST['count'];




   
if($count==0){
    header("Location:storehouse.php");
}

$seed=mysqli_real_escape_string($conn,    $_POST['seed']   );
if($seed==""){
    header("Location:storehouse.php");
}
$sql2 = "select * from flower where  name='$seed';";




	if ($result2 = mysqli_query($conn,$sql2)) {
        
        if ($rs2=mysqli_fetch_array($result2)){
            
            $name=$rs2['name'];
            $sold=$rs2['sold'];
            $earn=$sold*$count;//這是出售作物收入的錢
            
               
	            
            $sql3="update flower set count=count-$count where name='$name';";
            mysqli_query($conn,$sql3) or die("error3");
            $sql4="update player set money=money+$earn where nickname='$nickname';";
            mysqli_query($conn,$sql4) or die("error4");
	        echo "成功出售!!!!";
            echo " $name x $count ";
            echo "總共獲得 $earn 元";
            echo"<a href=storehouse.php>回倉庫</a>";
            
           
        }
    
       
   }
    
    
	
    
    
    
	
    
    
    
    
 

?>
</body>
</html>
