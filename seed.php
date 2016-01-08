<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>種植作物</title>
<style type="text/css">
#content{
position:relative;
background-image: url(growlist.png);
width:450px;
height:525px;
}
#title{
position:relative;
left:70px;
top:30px;
font-size:28px;
font-weight: bold;

}
#detail{
position:relative;
left:120px;
top:80px;
font-size:20px;
text-align:center;

}
#growingfarmer{
position:absolute;
left:10px;
top:330px;	
}
</head>

</style>
<body>
<div id="content" >
<div id="title">
What do you want to grow?
</div>
<div id="growingfarmer">
<img  src="picture/growingfarmer.png" />
</div>
<div id="detail">

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
      <input  type="radio" name="seed" id="seed" value=<?php echo $rs['name']; ?>><?php echo $rs['name']; ?>x<?php echo $rs['count']; ?>
	  <?php if($rs['time']<10){echo"  ";}echo $rs['time'];if($rs['time']<10){echo" ";} ?>秒<?phpif($rs['time']<10){echo" ";} ?>

    
      
   </label></td> 
   <td><label>
    <input type="submit" name="Submit" value="種植" />
    </label></td>
     
    
    
	
  </tr>
</table>

<?php
} 
?>
</form>
</div>
</div>
</body>
</html>
