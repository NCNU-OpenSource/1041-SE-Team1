<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>種植作物</title>
<style type="text/css">
#content{
position:relative;
width:325px;
height:325px;
top:80px;
}
#detail{
position:absolute;
top:6px;
left:50px;
font-size:18px;
font-weight:bold;
text-align:center;
}

</style>
</head>

<body>
<div id="content">
<img  src="picture\celebrate.jpg" />
</div>
<div id="detail">
<p>採收成功 !! </p>


<?php
require("conn.php");
?>


<?php
$id=(int)$_GET['id'];
$nickname=$_SESSION['nk'];
$sql1 = "select * from land where id=$id;";
$results1=mysqli_query($conn,$sql1);
$rs1=mysqli_fetch_array($results1);
$name=$rs1['seed'];
$sql2 = "select * from flower where name='$name';";
$results2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($results2);
$name2=$rs2['name'];
$sqlshop = "select * from shop where name='$name';";
$resultsshop=mysqli_query($conn,$sqlshop);
$rsshop=mysqli_fetch_array($resultsshop);
$sold=$rsshop['sold'];
$exp=$rsshop['exp'];
if ($name==$name2) {//如果已有這項作物
         $sqlx="update flower set count=count+1 where name='$name';";
    mysqli_query($conn,$sqlx) or die("errorx"); //執行SQL
    $sqlx4="update player set exp1=exp1+$exp where nickname='$nickname';";
    mysqli_query($conn,$sqlx4) or die("errorx4"); //執行SQL
    $sqlx5="update land set status='空地',seed='',time=0,exp=0,ftime=0 where id='$id';";
    mysqli_query($conn,$sqlx5) or die("errorx5"); //執行SQL
    echo"$name 收取成功";
	echo"";
    echo"獲得經驗值: $exp ";
    }
    else{
    
    $sql3="insert  into flower (name,count,sold)  values('$name',1,'$sold');";
    mysqli_query($conn,$sql3) or die("error3"); //執行SQL
    $sql4="update player set exp1=exp1+$exp where nickname='$nickname';";
    mysqli_query($conn,$sql4) or die("error4"); //執行SQL
    $sql5="update land set status='空地',seed='',time=0,exp=0,ftime=0 where id='$id';";
    mysqli_query($conn,$sql5) or die("error5"); //執行SQL
    echo"$name 收取成功";
	echo"";
    echo"獲得經驗值: $exp ";
}
?>
</form>
</div>
</div>
</body>
</html>
