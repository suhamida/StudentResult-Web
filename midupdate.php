
<!DOCTYPE html>
<html>
<head>
<style>
header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}

.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}


.info {background-color: lightblue; color: black;} /* Gray */ 
.info:hover {background: green;}
</style>

</head>
<body >

<div class="container">
<header>
   <h1>Updatable User INFORMATION</h1>
</header>

</div>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$check =$_POST['key'];


$sql = "SELECT * FROM login WHERE u_id='$check' ";
$result = mysqli_query($conn, $sql);


if (($rowcount=mysqli_num_rows($result))==0)
  {
	header("location: updateS.html");
  }
  
else if (mysqli_num_rows($result) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result)) {
	$userName= $row['User_name'];
	$userEmail= $row['user_email'];
	}
}

?>

<center>
<div style="background-color:	#F5F5DC">

<form action="updateu.php" method ="POST">

 <div style="background-color:	#F5F5DC; font-weight: bold;font-size:22px;"><br>Information of ID: <?php echo $check?></div>


<table width="30%">
<tr><br>
<td> User Name: </td><td><input type="text"  name= "id" value=<?php echo $check?>></td>
</tr>
<tr>
<td> User Name: </td><td><input type="text"  name= "nam" value=<?php echo $userName?>></td>
</tr>


<tr>
<td> User Email: </td><td><input type="text"  name= "em" value=<?php echo $userEmail?>></td>
</tr>
</table>
</center>

<center>

<div style="background-color:	#F5F5DC">
<br>
<tr>
<td><input class="btn info" type="submit" name="submit" value="Update"></td><br><br>
</tr>

</form>

</div>
</div>
</center>

<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>


</body>
</html>


  

	