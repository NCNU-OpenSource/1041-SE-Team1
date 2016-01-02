<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>
<style type="text/css">
#shoplist{
position:absolute;
right:300px;
top:100px;
}
#apple{
position:absolute;
width:100px;
left:400px;
top:230px;
}
#returnfarm{
position:absolute;
width:150px;
right:350px;
top:115px;	
}

</style>
<?php
require("conn.php");
?>
<div>
<img  id="shoplist" src="picture\shoplist.png" />
</div>
<div>
<img  id="apple" src="picture\apple.png" />
</div>
<?php
$sql = "select * from shop ;";
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {
?>

<table>

  <tr><form method="post" action="buy.php">
    <td><label>
      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>" >
     
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
<a href="farm.php"><img id="returnfarm" src="picture\returnfarm.png"><a>
</html>