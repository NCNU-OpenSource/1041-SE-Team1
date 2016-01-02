<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的倉庫</title>
</head>

<body>

<p>我的倉庫 !! </p>
<hr />

<?php
require("conn.php");
?>


<?php


$sql = "select * from flower where count >0 ;";//已收成的作物
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {

?>
<table>
  <tr><form method="post" action="sale.php">
    <td><label>
      <input type="hidden" name="id" value="<?php echo $rs['id']; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?>
    
   
     <?php echo $rs['sold']; ?>x<?php echo $rs['count']; ?>
   
    
      
   </label></td> 
    <td><label>
    <input type="textbox" size=1 name="count"  />
    </label></td>
   <td><label>
    <input type="submit" name="Submit" value="出售!" />
    </label></td>
     
    
    
	
  </tr>
</table>
</form>
<?php

} 

?>
<a href="farm.php">返回農場<a>
</body>
</html>