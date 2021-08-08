
<html>

<style>


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

<div class="container">
<header>
   <h1 style="color: white;">Success</h1>
</header>



<?php

$link = mysqli_connect("localhost", "root", "", "gpacalculate");
 
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 


$s_id = $_POST['id']; 
$c_id = $_POST['code'];
$trimester = $_POST['semester'];
$classTest = $_POST['classTest'];
$mid = $_POST['mid'];
$final = $_POST['final'];
$attendence = $_POST['attendence'];
$assignment = $_POST['assignment'];
$presentation = $_POST['presentation'];
$dept =$_POST['de'];
$credit= $_POST['credit'];
 
 
 $total = $classTest + $mid + $final + $attendence +$assignment +$presentation;
 
 if ($total >=81 && $total <=100)
 {
	 
	 $grade= 'A';
	 $gradepoint = 4.00;
	 
 }
  else if ($total >=75 && $total <=80)
 {
	 
	 $grade= 'A-';
	 $gradepoint = 3.75;
	 
 }
  else if ($total >=70 && $total <=74)
 {
	 
	 $grade= 'B+';
	 $gradepoint = 3.50;
	 
 }
 else  if ($total >=65 && $total <=69)
 {
	 
	 $grade= 'B';
	 $gradepoint = 3.00;
	 
 }
  else if ($total >=60 && $total <=64)
 {
	 
	 $grade= 'B-';
	 $gradepoint = 2.75;
	 
 }
 
 else  if ($total >=55 && $total <=59)
 {
	 
	 $grade= 'C';
	 $gradepoint = 2.50;
	 
 }
  else if ($total >=50 && $total <=54)
 {
	 
	 $grade= 'D';
	 $gradepoint = 2.00;
	 
 }
 else 
 {
	 
	 $grade= 'F';
	 $gradepoint = 0.00;
	 
 }
 
 
 
 $totalcr = $gradepoint * $credit; // total = gradepoint * credit for a subject
 
 
 

 
 
 

$sql = "INSERT INTO marks (s_id,trimester,dept,assignment,mid, final,attendence,classTest,presentation,total,grade,gradepoint,c_id,credit,totalcr) VALUES ('$s_id','$trimester','$dept','$assignment','$mid', '$final','$attendence','$classTest','$presentation','$total','$grade','$gradepoint','$c_id','$credit','$totalcr')";


if(mysqli_query($link, $sql)){
   echo "<!DOCTYPE HTML> 

<html>


 <head> <title>Try-Again</title>
<style>
body {background-image: url('img/pic1.png');}
h1   {color: black;}

.wrapper {
    text-align: center;
}

.wrappe {
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
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :250px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
 </head> 

<body> 

<div class=\"Sign-In\">
<div class= \"wrappe\">

<p><h1>Success!</h1> </p>

<h1>  </h1>


<div class= \"wrapper\">
<input id=\"mi\" type=\"submit\" name=\"submit\" value=\"go back\" onclick=\"window.location.href='teacher.html'\">
</div> </div> </div>

</form>

</body>

</html>
";
} else{
    echo "<!DOCTYPE HTML> 

<html>


 <head> <title>Try-Again</title>
<style>
body {background-image: url('img/pic1.png');}
h1   {color: black;}

.wrapper {
    text-align: center;
}

.wrappe {
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
 border:3px solid #9D9593; padding:30px 90px; background:#DAF7A6 ; width:600px; height :250px; border-radius:20px; box-shadow: 7px 7px 60px ; }


</style>
 </head> 

<body> 

<div class=\"Sign-In\">
<div class= \"wrappe\">



<h1> Try Again Please! </h1>


<div class= \"wrapper\">
<input id=\"mi\" type=\"submit\" name=\"submit\" value=\"Try-Again\" onclick=\"window.location.href='eres.php'\">
</div> </div> </div>

</form>

</body>

</html>
";
}
 
// close connection
mysqli_close($link);
?>

<br><br>

<div>
<footer>Copyright &copy; suchi_mun.com</footer>
</div>
</body>
</html>


