<html>

<style>

.wrapper {
    text-align: center;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}
#mi{
font-size : 30px;

text-align : center;
 border-style: solid;
    border-width: 5px;
 border-radius: 25px;
    background: #73AD21;
    padding: 20px;
   
	
    width :450px;
}

#mi:hover {


background: green;}


.Sign-In{ margin-top:50px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:20px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }

</style>
<body>
<header>
   <h1>Success!!!</h1>
   
   
</header>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$kill =$_POST['id'];
$na= $_POST['nam'];
	$dep= $_POST['dept'];
	$semo= $_POST['sem'];
	$con= $_POST['cont'];
	$phone= $_POST['phon'];

$sql = "UPDATE student SET Name='$na',Department='$dep',Semester='$semo',Contact_address='$con',Phone_no='$phone' WHERE ID='$kill'";

if ($conn->query($sql) === TRUE) {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>Update Successful </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='studentR.html'\" /> <br><br></div> </div>      ";
} else {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>ERROR </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Try again'  width=\"408\" height=\"900\"  onclick=\"window.location.href='updateST.html'\" /> <br><br></div> </div>      ";
}

$conn->close();

?>

<br>
<br>
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>




</html>