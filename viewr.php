 
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

.btn {

    border: none;

    color: white;

    padding: 14px 28px;

    font-size: 16px;

    cursor: pointer;

}



.danger {background-color: #4CAF50; color: black; width: 150px;} /* Green */ 

.danger:hover {background: #46a049;}

.warning {background-color: #CA9F92; color:black; font-weight:bold;} /* Orange */
.warning:hover {background: #e68a00;}



</style>
<body>
<header>
   <h1> Information</h1>
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

   &nbsp;&nbsp;&nbsp;&nbsp;
				Course Code:&nbsp;&nbsp;<?php
        $sql = "SELECT distinct c_id FROM marks";
        $result = $conn->query($sql);
        echo "<select name=\"code\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['c_id'].'">'.$row['c_id'].'</option>';
        }
        echo "</select>";
     ?>
&nbsp;&nbsp;&nbsp;&nbsp
Semester:&nbsp;&nbsp;<?php
        $sql = "SELECT distinct trimester FROM marks";
        $result = $conn->query($sql);
        echo "<select name=\"semester\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['trimester'].'">'.$row['trimester'].'</option>';
        }
        echo "</select>";
     ?>
	 <br><br><br>
	 <center><input type="submit" class="btn danger" name="submit" value="Submit" >
	 &emsp;&emsp;&emsp;<input type ="button" class="btn warning" value="Go Back" onclick="window.location.href='teacher.html'">&nbsp&nbsp&nbsp&nbsp&nbsp
</center>
 <br> <br>
	 

</form>
</center>

<?php

if(isset($_POST['submit']))



    {
	$key= $_POST['code'];
	$key1= $_POST['semester'];
	
$sql1 = "SELECT * FROM marks  WHERE trimester = '$key1' AND c_id='$key'  ";
$result1 = mysqli_query($conn, $sql1);

echo " <table width= 100%>
	<tr>
<th> Student ID </th>
<th> Department </th>

<th> Assignment </th>
<th> Mid </th>

<th> Attendence </th>

<th> CT </th>
<th> Final </th>
<th> Presentation </th>
<th> Total</th>
<th> Grade </th>


</tr>";




if (mysqli_num_rows($result1) > 0) {
    
	

    while($row = mysqli_fetch_assoc($result1)) {
echo " <tr> ";
	echo " <td>" . $row['s_id']. "</td>";
echo " <td>" . $row['dept']. "</td>";
echo " <td>" . $row['assignment']. "</td>";
echo " <td>" . $row['mid']. "</td>";
echo " <td>" . $row['attendence']. "</td>";
echo " <td>" . $row['classTest']. "</td>";
        echo " <td>" . $row['final']. "</td>";
        echo " <td>" . $row['presentation']. "</td>";
        echo " <td>" . $row['total']. "</td>";
		        echo " <td>" . $row['grade']. "</td>";


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
