<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>

<body>
<style type="text/css">

</style>
<?php
require("conn.php");
?>

<?php
$id=(int)$_GET['id'];
$sql = "select * from shop where id=$id;";
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {

?>

<table>
  <td><label>
  <tr><form method="post" action="buy.php">
   
      <input type="hidden" name="id"  value="<?php echo $rs['id']; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?><?php echo $rs['time']; ?>小時
    費用<?php echo $rs['money'];?>
   
   
     收益<?php echo $rs['sold']; ?>
   
    
      
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

