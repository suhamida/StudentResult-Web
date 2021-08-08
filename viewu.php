 <!DOCTYPE html>
<html>

<style>
table {
    border-collapse: collapse;
}

table, td {
    border: 1px solid black;
	text-align:center;
}

th {
    border: 1px solid black;
	text-align:center;
	font-size: 20px;
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



</style>
<body>

<div class="container">
<header>
   <h1>User Information</h1>
</header>
<br><br><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);

echo " <table width= 100%>
	<tr>
	<th> User ID </th>
`	<th> User Type </th>
<th>  User Name </th>
<th> User Email </th>


</tr>";




if (mysqli_num_rows($result) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result)) {
echo " <tr> ";
	echo " <td>" . $row['u_id']. "</td>";

	echo " <td>" . $row['User_type']. "</td>";
echo " <td>" . $row['User_name']. "</td>";
echo " <td>" . $row['user_email']. "</td>";

        
        echo " </tr> ";
        
       



    }
} else {
    echo "0 results";
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
