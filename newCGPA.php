  
<html>
<style>

.wrapper {
    text-align: center;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
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


.Sign-In{ margin-top:50px;  margin-right:110px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }

</style>

</head>
<body>
<br><br>
<header>

   <h2>CGPA</h2>
</header>



<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('gpacalculate')) {
    die('Could not select database: ' . mysql_error());
}


 $get = $_POST['getid'];

$result = mysql_query("SELECT  * FROM result where Student_ID='$get'");


if (mysql_num_rows($result) == 0) {
   echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>No ROW Found </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateCGPA.php'\" /> <br><br></div> </div>      ";
}
 
 else if (mysql_num_rows($result) == 1) {
   
   
    while($row = mysql_fetch_assoc($result)){

    $sid = $row["Student_ID"];
  
	}
   $result12 = mysql_query("SELECT * FROM result WHERE Student_ID = '$sid'");

   while($row = mysql_fetch_assoc($result12)){
  
   $gpa1= $row["GPA"];
   
   $dept1 = $row["dept"];
	$semester1 = $row["trimester"];
	
	$tot =$row["TotalCr"];
	}
	
	$sql12 = "INSERT INTO cgpa (dept,s_id,trimester,cgpa,totcredit) VALUES ('$dept1','$sid','$semester1','$gpa1','$tot')";

 $res12 = mysql_query($sql12,$link);
 
if($res12){
	
	
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>CalCulation Succeed </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateCGPA.php'\" /><br><br><br><br><br><br> <br><br></div> </div>      ";
} else{
    echo "   <div class =\"Sign-In\">
			<br><h1 align='center'>Error!! </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateCGPA.php'\" /> <br><br></div> </div>      ";
}
 
}
	
 
 
 
 
 
 
   

else {

$c =0;
$array = array();

// look through query
while($row = mysql_fetch_assoc($result)){

  // add each row returned into an array
  $array[] = $row;
  $c++;
  
  
}

echo $c;

//echo "<br>";


for( $i = 0; $i< $c; $i++ ) {


 $cat = $array[$i]['Student_ID'];
 
$Totalcrd= 0;
$result1 = mysql_query("SELECT * FROM result WHERE Student_ID = '$cat'");

while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
	
	
    
	
	$Totalcrd= $Totalcrd + $row["gpaTota"];
	
	$dept = $row["dept"];
	$semester = $row["trimester"];
	
	$id = $row["Student_ID"];
	
}



$resu = mysql_query("SELECT SUM(TotalCr) FROM result WHERE Student_ID = '$cat'");

while ($row = mysql_fetch_array($resu, MYSQL_ASSOC)) {
	
	
    $tcredit=  $row["SUM(TotalCr)"] ;
	
	
}



$gpa = $Totalcrd/$tcredit;

//echo $tcredit;
 
 $sql = "INSERT INTO cgpa (dept,s_id,trimester,cgpa,totcredit) VALUES ('$dept','$id','$semester','$gpa','$tcredit')";

 $res = mysql_query($sql,$link);
 
if($res){
	
	
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>CalCulation Succeed </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateCGPA.php'\" /><br><br><br><br><br><br> <br><br></div> </div>      ";
} else{
    echo "   <div class =\"Sign-In\">
			<br><h1 align='center'>Error!! </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateCGPA.php'\" /> <br><br></div> </div>      ";
}
 
}

}


mysql_free_result($result);


?>

</html>