 
 <html>
 <head>
<style>




footer {
    padding: 1em;
	
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}



</style>
</head>
 
 
 
 
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



 
   $col = $_POST['col'];
   $con = $_POST['con'];
   $coc = $_POST['coc'];
   
   
   
   
   
   
   
   
$sql = "INSERT INTO course (Course_code,Course_name,Credit_hours) VALUES ('$col','$con','$coc')";



if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE HTML> 

<html>


 <head> <title>registration</title>
<style>

h1   {color: black;}

.wrapper {
    text-align: center;
}

.wrappe {
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


.Sign-In{ margin-top:80px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :250px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
 </head> 

<body> 
  <div style=\"background-color:#353131;padding:15px;text-align:center;color: white;\">
  <h2>Course </h2>
</div> 

<div class=\"Sign-In\">
<div class= \"wrappe\">

<p><h1>Record Added </h1> </p>

<h1> Successfully </h1>


<div class= \"wrapper\">
<input id=\"mi\" type=\"submit\" name=\"submit\" value=\"Go Back\" onclick=\"window.location.href='admin.html'\">
</div> </div> </div>

</form>

</body>

</html>
";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>
<div>

<br> <br><br> <br><br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>

</body>
</html>