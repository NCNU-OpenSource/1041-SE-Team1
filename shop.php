<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>

<p>購買種子 !! </p>
<hr />
<table width="200" border="1">
  <tr>
     <td>作物</td>
    <td>時間</td>
    <td>售價</td>
    <td>獲利</td>
     <td>數量</td>
    
  </tr>
<?php
require("conn.php");
?>


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
</table>
</form>
<?php
} 
?>

</body>
</html>