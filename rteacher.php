  
  <!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href= "all.css">
<style>





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
   <h1> Success!!</h1>
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


$ID = $_POST['id'];
 $Name = $_POST['nam'];
  $dept = $_POST['dept'];
  $con = $_POST['con'];
  $post = $_POST['pos'];
 $em = $_POST['em'];
 $phon =$_POST['phon'];
 
   
   
   
   
   
   
$sql = "INSERT INTO teacher (ID, Name, Department,Post,E_mail,Contact_address,Phone_no)
VALUES ('$ID', '$Name','$dept','$post','$em','$con','$phon')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE HTML> 

<html>


 <head> <title>Added</title>
<style>
body {background-image: url('img/pic1.png');}
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
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
 </head> 

<body> 

<div class=\"Sign-In\">
<div class= \"wrappe\">

<p><h1>Record Added </h1> </p>



<div class= \"wrapper\">
<input id=\"mi\" type=\"submit\" name=\"submit\" value=\"Go Back\" onclick=\"window.location.href='teacherR.html'\">
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
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
 

 </body> 
 
</html>
