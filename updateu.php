<html>

<style>


.wrapper {
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
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }

 header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}

</style>
</head>
<body>

<header>
   <h1> Updated</h1>
</header>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['nam'];



$kill= $_POST['id'];
$email =$_POST['em'];

$sql = "UPDATE login SET User_name='$name',user_email='$email' WHERE u_id='$kill'";

if ($conn->query($sql) === TRUE) {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>Update Successful </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='userR.html'\" /> <br><br></div> </div>      ";
} else {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>ERROR </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Try again'  width=\"408\" height=\"900\"  onclick=\"window.location.href='updateu.html'\" /> <br><br></div> </div>      ";
}

$conn->close();

?>

<br><br><br>
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>


</html>