
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
   <h1>Student you need</h1>
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

?>

<center>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

   &nbsp;&nbsp;
				Course Code:&nbsp;&nbsp;<?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"code\">";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>
&nbsp;&nbsp;&nbsp;&nbsp
Semester:&nbsp;&nbsp;<?php
        $sql = "SELECT distinct Semester FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"semester\">";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Semester'].'">'.$row['Semester'].'</option>';
        }
        echo "</select>";
     ?>
	 <br><br>
	 <br>
	 <center><input type="submit" class="btn warning" name="submit" value="Submit" /><center>
 <br> <br>
	 

</form>
</center>

<?php

if(isset($_POST['submit']))



    {
	$key= $_POST['code'];
	$key1= $_POST['semester'];
	
$sql1 = "SELECT * FROM student  WHERE Semester = '$key1' AND course1='$key' OR course2='$key' OR course3='$key' OR  course4='$key' ";
$result1 = mysqli_query($conn, $sql1);

echo " <table width= 100%>
	<tr>
<th> Student ID </th>
<th>   Name </th>
<th> Department </th>
<th> Semester </th>
<th>   Contact Address</th>
<th> Phone Number </th>

</tr>";




if (mysqli_num_rows($result1) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result1)) {
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
}
mysqli_close($conn);


?> 
<br><br><br><br>

<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='teacher.html'">&nbsp&nbsp&nbsp&nbsp&nbsp


<div>
 <br> <br>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>
