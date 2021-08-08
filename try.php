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

if (mysqli_num_rows($result) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result)) {
	$userName= $row['User_name'];
	$userEmail= $row['user_email'];
	
	
	
	

	}
}


?>


<form action="updateu.php" method ="POST">
<h3> INFORMATION OF ID: <?php echo $check?></h3>


<table width="40%">
<tr>
<td> User Name: </td><td><input type="text"  name= "nam" value=<?php echo $userName?>></td>
</tr>


<tr>
<td> User Email: </td><td><input type="text"  name= "em" value=<?php echo $userEmail?>></td>
</tr>
</table>

<tr>
<td><input id="button" type="submit" name="submit" value="Update"></td>
</tr>

</form>