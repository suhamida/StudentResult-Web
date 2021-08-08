 
 
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


$ID = $_POST['id'];
 $Name = $_POST['nam'];
  $dept = $_POST['dept'];
  $con = $_POST['con'];
 $sem = $_POST['sem'];
 $phon =$_POST['phon'];
 
   $co1 = $_POST['co1'];
   $co1n = $_POST['co1n'];
   $co1c = $_POST['co1c'];
   
   $co2 = $_POST['co2'];
   $co2n = $_POST['co2n'];
   $co2c = $_POST['co2c'];
   
   $co3 = $_POST['co3'];
   $co3n = $_POST['co3n'];
   $co3c = $_POST['co3c'];
   
   $co4 = $_POST['co4'];
   $co4n = $_POST['co4n'];
   $co4c = $_POST['co4c'];
   
   
   
   
   
   
$sql = "INSERT INTO student (ID, Name, Department,Semester,Contact_address,Phone_no,course1,course2,course3,course4,course1Name,course2Name,course3Name,course4Name,course1Credit,course2Credit,course3Credit,course4Credit)
VALUES ('$ID', '$Name','$dept','$sem','$con','$phon','$co1','$co2','$co3','$co4','$co1n','$co2n','$co3n','$co4n','$co1c','$co2c','$co3c','$co4c')";

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


.Sign-In{ margin-top:50px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :250px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
 </head> 

<body> 
  <div style=\"background-color:#353131;padding:15px;text-align:center;color: white;\">
  <h2>OOPs!! </h2>
</div> 

<div class=\"Sign-In\">
<div class= \"wrappe\">

<p><h1>Record Added </h1> </p>

<h1> Successfully </h1>


<div class= \"wrapper\">
<input id=\"mi\" type=\"submit\" name=\"submit\" value=\"Go Back\" onclick=\"window.location.href='studentR.html'\">
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


<br><br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>

</body>
</html>