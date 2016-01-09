<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出售</title>
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
	        echo "成功出售!";
            echo " $name x $count ";
            echo "總共獲得 $earn 元";
            ?>
            <script type="text/javascript">
                self.opener.location.reload(); //重新整理farm.php頁面                             
            </script>
            <?php
           

           
        }       
   }
?>
</body>
</div>
</html>
