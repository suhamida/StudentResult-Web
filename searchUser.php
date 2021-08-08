<!DOCTYPE html>
<html>

<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

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



.warning {background-color: #CA9F92; color:black; font-weight:bold;} /* Orange */
.warning:hover {background: #e68a00;}

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


.Sign-In{ margin-top:100px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :100px; border-radius:20px; box-shadow: 7px 7px 60px ; }




</style>
<body>

<div class="container">
<header>
   <h1> User you need</h1>
</header>
<br><br>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$Empo = $_POST['key'];
 
 
$sql = "SELECT * FROM login WHERE u_id = '$Empo' ";
$result = mysqli_query($conn, $sql);






if (mysqli_num_rows($result) > 0) {
    
	echo " <table width= 100%>
	<tr>
	<th> User ID </th>
	<th> User Type </th>
<th>  User Name </th>
<th> User Email </th>



</tr>";

    while($row = mysqli_fetch_assoc($result)) {
echo " <tr> ";
echo " <td>" . $row['u_id']. "</td>";
	echo " <td>" . $row['User_type']. "</td>";
echo " <td>" . $row['User_name']. "</td>";
echo " <td>" . $row['user_email']. "</td>";
        
        echo " </tr> ";
        
       



    }
} else {
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>No record Exist</h1>";

	 

			
}
echo " </table> ";  

mysqli_close($conn);
?> 

</div>
<br><br><br><br>
<center>
<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='userR.html'">&nbsp&nbsp&nbsp&nbsp&nbsp
&emsp;&emsp;&emsp;<input type ="button" class="btn warning" value="Go To Home" onclick="window.location.href='admin.html'"><br></br>
</center>
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>


</body>
</html>