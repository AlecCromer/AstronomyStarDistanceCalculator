<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function generateDistance(){
	
	
var text="";
	
//takes data from table
var star1Name = document.getElementById("table").rows[1].cells[6].innerHTML;
var RAStar1 = document.getElementById("table").rows[1].cells[7].innerHTML;
var DECStar1 = document.getElementById("table").rows[1].cells[8].innerHTML;
var DISStar1 = document.getElementById("table").rows[1].cells[9].innerHTML;
var star2Name = document.getElementById("table").rows[2].cells[6].innerHTML;
var RAStar2 = document.getElementById("table").rows[2].cells[7].innerHTML;
var DECStar2 = document.getElementById("table").rows[2].cells[8].innerHTML;
var DISStar2 = document.getElementById("table").rows[2].cells[9].innerHTML;
text += "<p>The name of the first star is "+star1Name+"</p>";
text += "<p>The name of the second star is "+star2Name+"</p>";


//calculates the coordinates of star1
var xStar1 = DISStar1 * Math.cos(toRadians(RAStar1)) * Math.cos(toRadians(DECStar1));
var yStar1 = DISStar1 * Math.sin(toRadians(RAStar1)) * Math.cos(toRadians(DECStar1));
var zStar1 = DISStar1 * Math.sin(toRadians(DECStar1));

//calculates the coordinates of star2
var xStar2 = DISStar2 * Math.cos(toRadians(RAStar2)) * Math.cos(toRadians(DECStar2));
var yStar2 = DISStar2 * Math.sin(toRadians(RAStar2)) * Math.cos(toRadians(DECStar2));
var zStar2 = DISStar2 * Math.sin(toRadians(DECStar2));

//Rectangular Coordinate Differences
var dx = (xStar2 - xStar1);
var dy = (yStar2 - yStar1);
var dz = (zStar2 - zStar1);


//calculates average distance in parsecs and multiply 3.262 to get light years
var Distance = Math.floor(Math.sqrt(dx*dx + dy*dy + dz*dz)*3.262);
	document.getElementById("comparison").innerHTML = "<p>The distance between "+star1Name +" and "+star2Name+ " is approximately "+ Distance + " lightyears.</p>";
	document.getElementById("comparison").innerHTML += "<p>Or<p>";

//some fluff for fun
	document.getElementById("comparison").innerHTML += "<p>"+Distance*0.31+" parsecs"+"</p>";
	document.getElementById("comparison").innerHTML += "<p>"+Distance*365.25+" light days"+"</p>";
	document.getElementById("comparison").innerHTML += "<p>"+Distance*10346380656803150+" yards"+"</p>";
	document.getElementById("comparison").innerHTML += "<p>"+Distance*31039141970409450+" feet"+"</p>";
}
function toRadians (angle) {
  return angle * (Math.PI / 180);
}

</script>
</head>

<body onload="generateDistance()">

<h1>Welcome to the Astronomy 1102 Database</h1>

<p>Return to the main menu for another comparison</p>

<h2>This is a table featuring your star comparison</h2>
<?php

echo "<table id='table' style='border: solid 1px black;'><th>id</th><th>hip</th><th>hd</th><th>hr</th><th>gl</th><th>BayerFlamsteed</th><th>proper</th><th>RightAscension</th><th>Declination</th><th>Distance</th><th>ProperName</th><th>pmdec</th><th>rv</th><th>mag</th><th>absmag</th><th>spect</th><th>ci</th><th>x</th><th>y</th><th>z</th><th>vx</th><th>vy</th><th>vz</th><th>rarad</th><th>decrad</th><th>pmrarad</th><th>pmdecrad</th><th>bayer</th><th>flam</th><th>con</th><th>comp</th><th>comp_primary</th><th>base</th><th>lum</th><th>var</th><th>var_min</th><th>var_max</th>
";
 //echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
$servername = "localhost";
$username = "root";
$password = "cromer678";
$dbname = "astronomyproject";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["Star1Select1"])){
	
    $stmt = $conn->prepare("SELECT * FROM starlist WHERE ".$_POST["Star1Select1"]." ='".$_POST["Star1Value1"]."'AND ".$_POST["Star1Select2"]." ='".$_POST["Star1Value2"]."' LIMIT 1;");
}else{
	if(isset($_POST["star1"])){
	$stmt = $conn->prepare("SELECT * FROM starlist WHERE proper ='".$_POST["star1"]."' LIMIT 1;");

	}
}
	    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["Star2Select2"])){

    $stmt = $conn->prepare("SELECT * FROM starlist WHERE ".$_POST["Star2Select1"]." ='".$_POST["Star2Value1"]."' AND ".$_POST["Star2Select2"]." ='".$_POST["Star2Value2"]."' LIMIT 1;"); 
}else{
	if(isset($_POST["star2"])){
	$stmt = $conn->prepare("SELECT * FROM starlist WHERE proper ='".$_POST["star2"]."' LIMIT 1;");
	}
}

	    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
<p id="comparison">

</p>
<hr style="height: 5px;">
<img src="img/math.png">
</body>
</html>