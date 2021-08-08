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


.Sign-In{ margin-top:50px;  margin-right:150px; margin-left:290px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:500px; height 180px; border-radius:20px; box-shadow: 7px 7px 60px ; }

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

<div class="container">
<header>
   <h1>DELETE</h1>
</header>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$key =$_POST['key']; 

$sql1 = "SELECT * FROM teacher WHERE ID = '$key' ";
$result1 = mysqli_query($conn, $sql1);

if (($rowcount=mysqli_num_rows($result1))==0)
  {
	echo "   <div class =\"Sign-In\">
			<br><h1 align='center'>ERROR!! </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='TRY AGAIN'  width=\"408\" height=\"900\"  onclick=\"window.location.href='deletet.html'\" /> <br><br></div> </div>      ";

  }
  else  {

// sql to delete a record
$sql = "DELETE FROM teacher WHERE ID ='$key'";

if ($conn->query($sql) === TRUE) {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>DELETE Successful </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='teacherR.html'\" /> <br><br></div> </div>      ";
} else {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>ERROR!! </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='TRY AGAIN'  width=\"408\" height=\"900\"  onclick=\"window.location.href='deletet.html'\" /> <br><br></div> </div>      ";
}
  }
$conn->close();
?>
<br><br>

<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>


</body>
</html>
</html>