 
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


.Sign-In{ margin-top:50px;  margin-right:150px; margin-left:250px;
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :200px; border-radius:20px; box-shadow: 7px 7px 60px ; }

</style>
</head>
<body>
<header>

   <h2>GPA</h2>
</header>


<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('gpacalculate')) {
    die('Could not select database: ' . mysql_error());
}

//$key= $_POST['semester'];

$result = mysql_query("SELECT distinct Student_ID FROM result ");


if (mysql_num_rows($result) == 0) {
   echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>No ROW Found </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateGPA.php'\" /> <br><br></div> </div>      ";
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

//echo $c;

//echo "<br>";


for( $i = 0; $i< $c; $i++ ) {


 $cat = $array[$i]['Student_ID'];
 
$Totalcr= 0;
$result1 = mysql_query("SELECT * FROM result WHERE Student_ID = '$cat'");

while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
	
	
    
	
	$Totalcr= $Totalcr + $row["gpaTota"];
	
	$dept = $row["dept"];
	$semester = $row["trimester"];
	
	$id = $row["Student_ID"];
	
	
	
}



$resu = mysql_query("SELECT SUM(TotalCr) FROM result WHERE Student_ID = '$cat'");

while ($row = mysql_fetch_array($resu, MYSQL_ASSOC)) {
	
	
    $tcredit=  $row["SUM(TotalCr)"] ;
	
	
}



$gpa = $Totalcr/$tcredit;


 
 $sql = "INSERT INTO cgpa (dept,s_id,trimester,cgpa,totcredit) VALUES ('$dept','$id','$semester','$gpa','$tcredit')";

 $res = mysql_query($sql,$link);
 
if($res){
    echo   "   <div class =\"Sign-In\">
			<br><h1 align='center'>CalCulation Succeed </h1>

	 <div class=\"wrapper\"> <br><input type='button' id=\"mi\" value='Go  Back'  width=\"408\" height=\"900\"  onclick=\"window.location.href='calculateGPA.php'\" /> <br><br><br><br><br><br></div> </div>      ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error();
}
 
 
 
}
}


mysql_free_result($result);
?>

<br>
<br>
<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>
