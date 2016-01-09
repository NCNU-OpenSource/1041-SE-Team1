<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商店</title>
</head>
<style type="text/css">
#content{
position:relative;
background-image: url(itemlist.png);
width:338px;
height:117px;
}
#detail{
position:relative;
left:15px;
top:40px;
font-size:20px;
text-align:center;

}

</style>
<body>
<div id="content" >


<div id="detail">
<?php
require("conn.php");
?>

<?php
$id=(int)$_GET['id'];
$sql = "select * from flower where id=$id;";
$results=mysqli_query($conn,$sql);

while ($rs=mysqli_fetch_array($results)) {

?>

<table>
  <td><label>
  <tr><form method="post" action="sale.php">
   
      <input type="hidden" name="id"  value="<?php echo $rs['id']; ?>" >
     
    </label></td>
    <td><label>
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?>
      x<?php echo $rs['count']; ?>
     售價<?php echo $rs['sold']; ?>
    
    
      
   </label></td> 
    <td><label>
    <input type="textbox" size=1 name="count"  />
    </label></td>
   <td><label>
    <input type="submit" name="Submit" value="賣" />
    </label></td>

 </tr>

</form>
</div>
<?php
} 
?>
</div>
</body>
</html>