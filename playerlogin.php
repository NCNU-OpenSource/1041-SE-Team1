<?php
require("conn.php");
?>
<?php
$_SESSION['uID'] = "";
$_SESSION['nk']="";
if(isset($_POST['id'])){
    $userName = $_POST['id'];
}
else
{
    $userName = "";
}
if(isset($_POST['pwd'])){
    $passWord  = $_POST['pwd'];
}
else
{
    $passWord  = "";
}



		$sql = "SELECT * FROM player WHERE id='" . $userName . "' AND pwd= '" . $passWord . "'   ";
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
                
				header("Location:farm.php");
				exit(0);
			} else {
				//echo "請先登入以使用 <br />";
			}
		}


?>
<style type="text/css">
#content{
position:relative;
background-image: url(login.jpg);
width: 750px;
height: 500px;
left: 280px;
top: 50px;
opacity:0.9;
}
#log{
position: absolute;
left: 250px;
bottom: 150px;
}
</style>
<div id="content">
<div id="woodboard">
</div>
<div id="log">

<h1 style="color:red ; text-align:center"><font size=6> Login</font></h1>
<br/>
<form method="post" action="playerlogin.php">
<font size=4>UserName:</font><input type="text" name="id" value=dcw><br/>
<br/>

<font size=4>Password:</font><input type="password" name="pwd" value=12345><br/>
<br/>
<h1 style="text-align:center"><input type="submit" value="登入"></h1>
</form>
</div>
</div>