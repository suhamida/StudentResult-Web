
<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href= "all.css">
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}


.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: green;}

header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}

</style>
</head>
<body>

<header>
   <h1> STUDENT Registration</h1>
</header>


<center>

<div class ="deg">
  <form action="res.php" id="myForm" method ="post">
<table width="30%">

<tr>
<td>ID<td>
<td><input type="text" name="id" required></td>
</tr>
<tr>
<td>Name<td>
<td><input type="text" name="nam" required></td>
</tr>
<td>Department<td>
<td><input type="text" name="dept" required></td>
<tr>

<td>Semester<td>
<td><input type="text" name="sem" required></td>
</tr>

<td>Contact_address<td>
<td><input type="text" name="con" required></td>
<tr>
<td>Phone_no<td>
<td><input type="text" name="phon" required></td>
</tr>
</table >

<table width="60%">

<tr>

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


<td>course-1 Code<td>
<td><?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co1\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>



<td>course-1 Name<td>
<td><?php
        $sql = "SELECT distinct Course_name FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co1n\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_name'].'">'.$row['Course_name'].'</option>';
        }
        echo "</select>";
     ?>



<td>course-1 Credit<td>
<td><?php
        $sql = "SELECT distinct Credit_hours FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co1c\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Credit_hours'].'">'.$row['Credit_hours'].'</option>';
        }
        echo "</select>";
     ?></td>

</tr>
<br>
<tr>

<td>course-2 Code<td>
<td><?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co2\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>




<td>course-2 Name<td>
<td>
<?php
        $sql = "SELECT distinct Course_name FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co2n\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_name'].'">'.$row['Course_name'].'</option>';
        }
        echo "</select>";
     ?>


<td>course-2 Credit<td>
<td><?php
        $sql = "SELECT distinct Credit_hours FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co2c\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Credit_hours'].'">'.$row['Credit_hours'].'</option>';
        }
        echo "</select>";
     ?></td>

</tr>

<tr>

<td>course-3 Code<td>
<td><?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co3\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>


<td>course-3 Name<td>
<td><?php
        $sql = "SELECT distinct Course_name FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co3n\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_name'].'">'.$row['Course_name'].'</option>';
        }
        echo "</select>";
     ?>



<td>course-3 Credit<td>
<td><?php
        $sql = "SELECT distinct Credit_hours FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co3c\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Credit_hours'].'">'.$row['Credit_hours'].'</option>';
        }
        echo "</select>";
     ?>	</td>

</tr>


<tr>

<td>course-4 Code<td>
<td><?php
        $sql = "SELECT distinct Course_code FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co4\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_code'].'">'.$row['Course_code'].'</option>';
        }
        echo "</select>";
     ?>


<td>course-4 Name<td>
<td><?php
        $sql = "SELECT distinct Course_name FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co4n\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Course_name'].'">'.$row['Course_name'].'</option>';
        }
        echo "</select>";
     ?>



<td>course-4 Credit<td>
<td><?php
        $sql = "SELECT distinct Credit_hours FROM course";
        $result = $conn->query($sql);
        echo "<select name=\"co4c\" required>";
        echo "<option size =30 value=\"\" >--SELECT--</option>";
        while($row = $result->fetch_assoc())
        {        
        echo '<option value="'.$row['Credit_hours'].'">'.$row['Credit_hours'].'</option>';
        }
        echo "</select>";
     ?>



</tr>
</table>
</center>


<center>	
<br><br>	
	      <input type="submit" class="btn default" value="Submit" >	
		 &emsp;&emsp; <input type ="button" class="btn default" value="Go Back" onclick="window.location.href='studentR.html'">&nbsp&nbsp&nbsp&nbsp&nbsp
	
	</center>			
</form> 


</div>

<br><br>
<footer>Copyright &copy; suchi_mun.com</footer>
</body>
</html>

