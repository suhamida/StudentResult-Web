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
   <h1>Updatable Student INFORMATION</h1>
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

$check =$_POST['keys'];


$sql = "SELECT * FROM student WHERE ID='$check' ";
$result = mysqli_query($conn, $sql);


if (($rowcount=mysqli_num_rows($result))==0)
  {
	header("location: updateSts.html");
  }
  
else if (mysqli_num_rows($result) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result)) {
	$nam= $row['Name'];
	$dept= $row['Department'];
	$sem= $row['Semester'];
	$cont= $row['Contact_address'];
	$phon= $row['Phone_no'];
	
	}
}

?>

<center>
<div style="background-color:	#F5F5DC">


<form action="updatest.php" method ="POST">
 <div style="background-color:	#F5F5DC; font-weight: bold;font-size:22px;"><br>Information of ID: <?php echo $check?></div>


<table width="40%">
<tr>
<td> Student ID: </td><td><input type="text"  name= "id" value=<?php echo $check?>></td>
</tr>
<tr>
<td> Student Name: </td><td><input type="text"  name= "nam" value=<?php echo $nam?>></td>
</tr>
<tr>
<td> Department: </td><td><input type="text"  name= "dept" value=<?php echo $dept?>></td>
</tr>
<tr>
<td> Semester: </td><td><input type="text"  name= "sem" value=<?php echo $sem?>></td>
</tr>

<tr>
<td> Contact_address: </td><td><input type="text"  name= "cont" value=<?php echo $cont?>></td>
</tr>

<tr>
<td> Phone_no: </td><td><input type="text"  name= "phon" value=<?php echo $phon?>></td>
</tr>
</table>

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


  

	