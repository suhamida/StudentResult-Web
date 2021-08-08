<!DOCTYPE HTML> 
<html> 
<head> 
<title>LOG-IN</title> 
<style>

footer {
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



.info {background-color: #CA9F92; color:black; font-weight:bold;} 
.info:hover {background: #0b7dda;}



</style>

</head> 

<body > 



<div style="background-color:#353131;padding:15px;text-align:center;color: white;">

<h1>LOG-IN HERE</h1></div> 



<div     style="background-color:	#F5F5DC">
<center>
 <form method="POST" action="loginButton.php"> 

 <br><br><br>
 
 <table width="40%">
<tr>
<td><b>User Type:</b> </td>
<td><select name="sel" style="width: 290px;" required >
	<option value="">-Select-</option>
 	 <option value="Admin">Admin</option>
  	<option value="Teacher">Teacher</option>
  	<option value="Student">Student</option>
  	<option value="Administration">Administration</option>
</select></td>

 </tr>


<tr>
<td><b>User Name:</b> </td>
<td><input type="text" name="Name"size="40" required></td>

 </tr>
<tr>
 <td> <b>Password:</b></td> 
<td><input type="password" name="pass"size="40" required></td> 

</tr>
</table>
<br>
<table>
<tr>
<td><input class="btn info" type="submit" name="submit" value="Login">
<br><br><br>

</td>
</tr>
</table>



 </form>

 </center>
 </div>


<div>

<footer>Copyright &copy; suchi_mun.com</footer>
</div>
 

 </body> 
 
</html>
