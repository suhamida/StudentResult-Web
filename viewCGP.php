  
</html>
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
<header>
   <h1>All CGPA</h1>
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


	
	
$sql1 = "SELECT * FROM cgpa  ";
$result1 = mysqli_query($conn, $sql1);

echo " <table width= 100%>
	<tr>
<th> Student ID </th>
<th> Semester </th>
<th> Department</th>

<th> CGPA </th>
<th> Total Credit </th>




</tr>";




if (mysqli_num_rows($result1) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result1)) {
echo " <tr> ";
	echo " <td>" . $row['s_id']. "</td>";
echo " <td>" . $row['trimester']. "</td>";
echo " <td>" . $row['dept']. "</td>";
echo " <td>" . $row['cgpa']. "</td>";
echo " <td>" . $row['totcredit']. "</td>";



        echo " </tr> ";
        
       



    }
} else {
    echo "0 results";
}
echo " </table> ";  

mysqli_close($conn);


?> 
<br><br><br><br>
<center>
<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='admin.html'">&nbsp&nbsp&nbsp&nbsp&nbsp
</center>

<div>
 <br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>
