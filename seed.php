<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>Do you want to grow !! </p>
<hr />
<table width="200" border="1">
  <tr>
     <td>  作物</td>
    <td>時間</td>
    <td>花費</td>
    <td>售價</td>
     <td>數量</td>
    
  </tr>
<?php
require("conn.php");
?>


<?php
$id=(int)$_GET['id'];

$sql = "select * from seed where count>0;";
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {

?>
<table>
  <tr><form method="post" action="grow.php">
    <td><label>
      <input type="hidden" name="id" value="<?php echo $id; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?><?php echo $rs['time']; ?>小時
    <?php echo $rs['money'];?>
   
   
     <?php echo $rs['sold']; ?>
   
    
      <?php echo $rs['count']; ?>
   </label></td> 
   <td><label>
    <input type="submit" name="Submit" value="種植!" />
    </label></td>
     
    
    
	
  </tr>
</table>

<?php
} 
?>
</form>
</body>
</html>
//種植作物的表單
