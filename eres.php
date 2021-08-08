 





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

    font-size: 16px;

    cursor: pointer;

}



.danger {background-color: #4CAF50; color: black; width: 150px;} /* Green */ 

.danger:hover {background: #46a049;}

</style>
</head>



<body>


<header>

<h2 style="text-align:center;">Central Women's University</h2>

</header>


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
<div     style="background-color:	#F5F5DC">

<br><h2 ><b>Enter Marks</b></h2><br>

<form action ="marks.php" method="POST">

				<b>Course Name:</b> &nbsp;&nbsp;<?php
        $sql = "SELECT distinct Course_name FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"txtName\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_name'].'">'.$row['Course_name'].'</option>';
        }
        echo "</select>";
     ?>&emsp;&emsp;
				
				&nbsp;&nbsp;&nbsp;&nbsp;
				<b>Course Code:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"code\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>&emsp;&emsp;
				
				
                <b>Semester:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT distinct Semester FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"semester\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Semester'].'">'.$row['Semester'].'</option>';
        }
        echo "</select>";
     ?>&emsp;&emsp;
				
				
				
				<br><br>
				
				<b>Student Name:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT  Name FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"sname\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
        }
        echo "</select>";
     ?> &nbsp;&nbsp;&emsp;&emsp;
				
				
				<b>ID:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT  ID FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"id\" required> ";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['ID'].'">'.$row['ID'].'</option>';
        }
        echo "</select>";
     ?> &emsp;&emsp;
	<b>Dept:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT  Department FROM student";
        $result = $conn->query($sql);
        echo "<select name=\"de\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Department'].'">'.$row['Department'].'</option>';
        }
        echo "</select>";
     ?> 
				<br><br> &emsp;
				<b>CREDIT:</b>&nbsp;&nbsp;<?php
        $sql = "SELECT  Credit_hours FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"credit\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Credit_hours'].'">'.$row['Credit_hours'].'</option>';
        }
        echo "</select>";
     ?> 
</center>
</div>
<div     style="background-color:	#F5F5DC">

				<br><br><br>
				
				
	<table  align="center" style="width:30% ; text-align:center;">
 
 
  <tr>
    <th>Section</th>
    <th>Marks</th> 
    <th>Out of</th>
  </tr>
  <tr> 
    <td>Class Test</td>
    <td><input  style ="border: none;" type="text" name="classTest" required></td>
    <td>15</td>
  </tr>
  <tr>
    <td>Mid Term</td>
    <td><input  style ="border: none;" type="text" name="mid" required></td>
    <td>20</td>
  </tr>
  <tr>
    <td>Final</td>
    <td><input  style ="border: none;" type="text" name="final" required></td>
    <td>40</td>
  </tr>
  <tr>
    <td>Attendence</td>
    <td><input  style ="border: none;" type="text" name="attendence" required></td>
    <td>10</td>
  </tr>
  <tr>
    <td>Assignment</td>
    <td><input  style ="border: none;" type="text" name="assignment" required></td>
    <td>10</td>
  </tr>
  <tr>
    <td>Presentation</td>
    <td><input  style ="border: none;" type="text" name="presentation" required></td>
    <td>5</td>
  </tr>
</table>

<br><br><br>
<center><input type="submit" class="btn danger" align="center" value="Submit" /></center><br><br>

 
</form>
</div>

<div>
<footer>Copyright &copy; suchi_mun.com</footer>

</div>

</body>
</html>
</body>
</html>
