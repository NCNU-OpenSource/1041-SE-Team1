<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>
<style type="text/css">
#shoplist{
position:relative;
left:300px;
top:100px;
}
#buy{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#apple{
position:absolute;
width:100px;
left:400px;
top:230px;
}
#rice{
position:absolute;
width:100px;
left:700px;
top:230px;
}
#tomato{
position:absolute;
width:90px;
left:850px;
top:240px;
}
#green_pepper{
position:absolute;
width:80px;
left:400px;
top:380px;
}
#grape{
position:absolute;
width:65px;
left:570px;
top:380px;
}

#close{
position:absolute;
width:50px;
left:950px;
top:125px;	
}
</style>
<?php
require("conn.php");
?>
<div>
<img  id="shoplist" src="picture\shoplist.png" />

<div>
<img  id="apple" src="picture\apple.png" />
<a href><img  id="rice" src="picture\rice.png" /></a>
<a href><img  id="tomato" src="picture\tomato.png" /></a>
<a href><img  id="green_pepper" src="picture\green_pepper.png" /></a>
<a href><img  id="grape" src="picture\grape.png" /></a>
</div>
</div>
<?php
$sql = "select * from shop ;";
$results=mysqli_query($conn,$sql);
$num=0;
while ($rs=mysqli_fetch_array($results)) {
$num++;
?>

<table>
  <td><label>
  <tr><form method="post" action="buy.php">
   
      <input type="hidden" name="id"  value="<?php echo $rs['id']; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?><?php echo $rs['time']; ?>小時
    <?php echo $rs['money'];?>
   
   
     <?php echo $rs['sold']; ?>
   
    
      
   </label></td> 
    <td><label>
    <input type="textbox" size=1 name="count"  />
    </label></td>
   <td><label>
    <input type="submit" name="Submit" value="購買!" />
    </label></td>

 </tr>

</form>
<?php
} 
?>

</body>
<a href="farm.php"><img id="close" src="picture\close.png"><a>
</html>
