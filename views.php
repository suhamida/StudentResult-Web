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

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

echo " <table width= 100%>
	<tr>
<th> Student ID </th>
<th>   Name </th>
<th> Department </th>
<th> Semester </th>
<th>   Contact Address</th>
<th> Phone Number </th>

</tr>";




if (mysqli_num_rows($result) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result)) {
echo " <tr> ";
	echo " <td>" . $row['ID']. "</td>";
echo " <td>" . $row['Name']. "</td>";
echo " <td>" . $row['Department']. "</td>";
echo " <td>" . $row['Semester']. "</td>";
echo " <td>" . $row['Contact_address']. "</td>";
echo " <td>" . $row['Phone_no']. "</td>";
        
        echo " </tr> ";
        
       



    }
} else {
    echo "0 results";
}
echo " </table> ";  

mysqli_close($conn);
?> 
</div>
<center>
<br><br><br><br>

<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='studentR.html'">&nbsp&nbsp&nbsp&nbsp&nbsp
&emsp;&emsp;&emsp;<input type ="button" class="btn warning" value="Go To Home" onclick="window.location.href='admin.html'"><br></br>

</center>
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>


</body>
</html>