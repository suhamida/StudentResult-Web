 





 <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
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
    font-size: 14px;
    cursor: pointer;
}



.warning {background-color: #CA9F92; color:black; font-weight:bold;} /* Orange */
.warning:hover {background: #e68a00;}

</style>
</head>
<body>
<header>

<h2 style="text-align:center;">Central Women's University</h2>
   <h3>GPA</h3>
</header>


<div     style="background-color:	#F5F5DC">
<br><br>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gpacalculate";
        // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        ?> 


<center>

<form action ="gpa.php" method="POST">

				
				
				
                Semester:&nbsp;&nbsp;<?php
        $sql = "SELECT distinct Semester FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"semester\" width=\"150px\">";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Semester'].'">'.$row['Semester'].'</option>';
        }
        echo "</select>";
     ?>
				
				
				
				
				
	</center>			
				
				<br>
				<br>
				
<center><input  class ="btn warning" type="submit" align="center" value="Submit" />
&emsp;&emsp;&emsp;<input type ="button" class="btn warning" value="Go To Home" onclick="window.location.href='admin.html'"><br></br>
</center>

 
</form>
<br><br>

</div>


</center>



<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>


