<!DOCTYPE html>
<html>
<head>
<style>
body {background-color:white;}
h1   {color: black;}
p    {color: red;}

.wrapper {
    text-align: center;
}



footer {
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


.Sign-In{ margin-top:80px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :300px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
</head>


<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'gpacalculate'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$ty = $_POST['sel'];
$email = $_POST['Name'];
$pass = $_POST['pass'];			

if (!($email=="" && $pass=="" && $ty==""))
{

$result = mysql_query("SELECT * FROM login WHERE User_name = '$_POST[Name]'  ")  or die(mysql_error());

$row = mysql_fetch_array($result);

if($row["User_name"]==$email && $row["User_password"]==$pass && $row["User_type"]==$ty)
   {
		if ($ty=='Admin')
	
	{
		header("location: admin.html");
	}
	else if ($ty=='Administration'){
		header("location: administrator.html");
	}
	
	else if ($ty =='Teacher')
	{header("location: teacher.html");
}
	
	else if ($ty =='Student')
	{header("location: student.html");
}
	
	
	}
else
{
   echo   "  <div style=\"background-color:#353131;padding:15px;text-align:center;color: white;\">
  <h2>OOPs!! </h2>
</div> <div class =\"Sign-In\">
			<br><h1 align='center'>Something Wrong! </h1><h1 align='center'> Try Again</h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go to Login Page'  width=\"408\" height=\"900\"  onclick=\"window.location.href='login.php'\" /> <br><br></div> </div>      ";

		
}
}

	


?>


<br> <br><br> <br><br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>

</body>
</html>