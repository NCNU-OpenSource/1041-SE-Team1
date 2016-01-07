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
}
#seed_colorbotton{
position:absolute;
width:100px;
left:70px;
top:67px;
}
#food_botton{
position:absolute;
width:100px;
left:180px;
top:60px;
}

#buy{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#cake{
position:absolute;
width:110px;
left:110px;
top:150px;
}
#rice{
position:absolute;
width:110px;
left:265px;
top:150px;
}
#chocolate{
position:absolute;
width:120px;
left:420px;
top:160px;
}
#popcorn{
position:absolute;
width:65px;
left:595px;
top:145px;
}
#hambuger{
position:absolute;
width:90px;
left:120px;
top:300px;
}
#riceball{
position:absolute;
width:95px;
left:270px;
top:295px;
}
#milk{
position:absolute;
width:83px;
left:430px;
top:283px;
}
#chicken{
position:absolute;
width:110px;
left:570px;
top:290px;
}
#previouspage{
position:absolute;
width:40px;
left:50px;
top:245px;
}
#nextpage{
position:absolute;
width:40px;
left:695px;
top:245px;
}

#close{
position:absolute;
width:50px;
left:650px;
top:35px;	
}
</style>
<?php
require("conn.php");
?>

<?php
$id=(int)$_GET['id'];
$sql = "select * from food where id=$id;";
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {

?>

<table>
  <td><label>
  <tr><form method="post" action="eat.php">
   
      <input type="hidden" name="id"  value="<?php echo $rs['id']; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?>
    費用:<?php echo $rs['price'];?>
   
   
     回復體力:<?php echo $rs['power']; ?>
   
    
      
   </label></td> 
    
   <td><label>
    <input type="submit" name="Submit" value="吃!" />
    </label></td>

 </tr>

</form>
<?php
} 
?>

</body>
<a href="farm.php"><img id="close" src="picture\close.png"><a>
</html>