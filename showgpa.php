  
</html>
<style>
table#ki {
    border-collapse: collapse;
}

table#ki, td#ki, th#ki {
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
   <h1>Know YOUR GPA</h1>
</header>
<br><br><br><br>
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gpacalculate";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

   <table>
<tr><td>ID: </td><td><input type="text" name ="code" value="" required></td>
<td>Semester: </td><td><input type="text" name ="semester" value="" required></td></tr>
</table>
	 
	 <br>
	 <center><input type="submit" class="btn warning" name="submit" value="Submit" >	 &emsp;&emsp;&emsp;<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='student.html'">
</center>
 <br> <br>
	 

</form>
</center>
<?php

if(isset($_POST['submit']))



    {
	$key= $_POST['code'];
	$key1= $_POST['semester'];
	
$sql1 = "SELECT * FROM result  WHERE trimester = '$key1' AND Student_ID='$key'  ";
$result1 = mysqli_query($conn, $sql1);
 

echo " 
<br><br> <table  id =\"ki\" width= 100%>
	<tr>
<th id =\"ki\"> Student ID </th>
<th id =\"ki\"> Semester </th>
<th id =\"ki\"> Department</th>

<th id =\"ki\"> GPA </th>
<th id =\"ki\"> Total Credit </th>

</tr>";




if (mysqli_num_rows($result1) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result1)) {

	echo " <tr> ";
	echo " <td id =\"ki\">" . $row['Student_ID']. "</td>";
echo " <td id =\"ki\">" . $row['trimester']. "</td>";
echo " <td id =\"ki\">" . $row['dept']. "</td>";
echo " <td id =\"ki\">" . $row['GPA']. "</td>";
echo " <td id =\"ki\">" . $row['TotalCr']. "</td>";



        echo " </tr> ";
        
       



    }
} else {
    echo "0 results";
}
echo " </table> ";  
}
mysqli_close($conn);


?> 
<br><br>



<div>
 <br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>



 