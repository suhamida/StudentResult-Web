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
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
</head>


<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'gpacalculate'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


$name = $_POST['Name'];
$pass = $_POST['pass'];	
$email = $_POST['email'];
$type = $_POST['typ'];			
$id = $_POST['id'];
	
	
	
	
if (!($email=="" && $pass=="" && $name=="" && $type==""))
{

	$result = mysql_query("SELECT * FROM login WHERE User_name = '$_POST[Name]' ")  or die(mysql_error());

	$row = mysql_fetch_array($result);

		if($row["User_name"]==$name  && $row["User_password"]== $pass && $row["User_type"]==$type)
   			{
				

				
	echo   "  <div style=\"background-color:#353131;padding:15px;text-align:center;color: white;\">
  <h2>OOPs!! </h2>
</div> <div class =\"Sign-In\">
			<br><h1 align='center'>You are already registered</h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go to Login Page'  width=\"408\" height=\"900\"  onclick=\"window.location.href='login.php'\" /> <br><br></div> </div>      ";

			}else{

    			$fullname = $_POST['Name'];  
			 $password = $_POST['pass']; 
			
$emaill = $_POST['email'];
$typee = $_POST['typ'];			



		$query = "INSERT INTO login (u_id,User_name,User_password,User_type,user_email) VALUES ('$id','$fullname','$password','$typee','$emaill')";

 		$data = mysql_query ($query)or die(mysql_error());
 				if($data) { 

			echo   "  <div style=\"background-color:#353131;padding:15px;text-align:center;color: white;\">
  <h2>SUCCESS </h2></div> <div class =\"Sign-In\">
			<br><h2 align='center'>YOUR REGISTRATION IS COMPLETED...</h2>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go to Login Page'  width=\"408\" height=\"900\"  onclick=\"window.location.href='login.php'\" /> <br><br></div> </div>      ";
				 }}
}


?>


<br> <br><br> <br><br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>

</body>
</html>