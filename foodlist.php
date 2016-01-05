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
#buy{
position:absolute;
width:60px;
left:420px;
top:325px;
}
#cake{
position:absolute;
width:100px;
left:100px;
top:180px;
}
#rice{
position:absolute;
width:100px;
left:300px;
top:170px;
}
#hot{
position:absolute;
width:90px;
left:500px;
top:180px;
}
#hambuger{
position:absolute;
width:80px;
left:100px;
top:340px;
}

#close{
position:absolute;
width:50px;
left:650px;
top:115px;	
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
