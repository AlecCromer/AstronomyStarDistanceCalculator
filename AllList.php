<?phpsession_start();
if(!isset($_SESSION['next'])){
	$_SESSION['next'] = 1;
	$_SESSION['statement'] = "SELECT * FROM starlist LIMIT 20000;";
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>Welcome to the Astronomy 1102 Database</h1>
<h2>Alec Cromer's Astronomy Creative Project</h2>

<p>Please type in the name of two NAMED stars eg:"Polaris", "Almaak", "Mira"</p>

<form action="search.php" method="post">
Star One Name: <input type="text" name="star1"><br>
Star Two Name: <input type="text" name="star2"><br>
<input type="submit">
</form>
<hr>
<form action="search.php" method="post">
<table style="border: 1px solid black;">
<tr>
<td style="border-right:5px solid black">
<p>Select two options for your first star</p>
<select name="Star1Select1">Or select two options
<option value="id">id</option>
<option value="hip">hip</option>
<option value="hd">hd</option>
<option value="hr">hr</option>
<option value="gl">gl</option>
<option value="BayerFlamsteed">BayerFlamsteed</option>
<option value="Proper">Proper</option>
<option value="RightAsension">RightAsension</option>
<option value="Declination">Declination</option>
<option value="Distance">Distance</option>
<option value="ProperName">ProperName</option>
<option value="pmdec">pmdec</option>
<option value="rv">rv</option>
<option value="mag">mag</option>
<option value="absmag">absmag</option>
<option value="spect">spect</option>
<option value="ci">ci</option>
<option value="x">x</option>
<option value="y">y</option>
<option value="z">z</option>
<option value="vx">vx</option>
<option value="vy">vy</option>
<option value="vz">vz</option>
<option value="rarad">rarad</option>
<option value="decrad">decrad</option>
<option value="pmrarad">pmrarad</option>
<option value="pmdecrad">pmdecrad</option>
<option value="bayer">bayer</option>
<option value="flam">flam</option>
<option value="con">con</option>
<option value="comp">comp</option>
<option value="comp_primary">comp_primary</option>
<option value="base">base</option>
<option value="lum">lum</option>
<option value="var">var</option>
<option value="var_min">var_min</option>
<option value="var_max">var_max</option>
</select>
<input type="text" name="Star1Value1"></br>


<select name="Star1Select2">Or select two options
<option value="id">id</option>
<option value="hip">hip</option>
<option value="hd">hd</option>
<option value="hr">hr</option>
<option value="gl">gl</option>
<option value="BayerFlamsteed">BayerFlamsteed</option>
<option value="Proper">Proper</option>
<option value="RightAsension">RightAsension</option>
<option value="Declination">Declination</option>
<option value="Distance">Distance</option>
<option value="ProperName">ProperName</option>
<option value="pmdec">pmdec</option>
<option value="rv">rv</option>
<option value="mag">mag</option>
<option value="absmag">absmag</option>
<option value="spect">spect</option>
<option value="ci">ci</option>
<option value="x">x</option>
<option value="y">y</option>
<option value="z">z</option>
<option value="vx">vx</option>
<option value="vy">vy</option>
<option value="vz">vz</option>
<option value="rarad">rarad</option>
<option value="decrad">decrad</option>
<option value="pmrarad">pmrarad</option>
<option value="pmdecrad">pmdecrad</option>
<option value="bayer">bayer</option>
<option value="flam">flam</option>
<option value="con">con</option>
<option value="comp">comp</option>
<option value="comp_primary">comp_primary</option>
<option value="base">base</option>
<option value="lum">lum</option>
<option value="var">var</option>
<option value="var_min">var_min</option>
<option value="var_max">var_max</option>
</select>
<input type="text" name="Star1Value2">
</td>

<td>

<p>Select two options for your second star</p>
<select name="Star2Select1">Or select two options
<option value="id">id</option>
<option value="hip">hip</option>
<option value="hd">hd</option>
<option value="hr">hr</option>
<option value="gl">gl</option>
<option value="BayerFlamsteed">BayerFlamsteed</option>
<option value="Proper">Proper</option>
<option value="RightAscension">RightAscension</option>
<option value="Declination">Declination</option>
<option value="Distance">Distance</option>
<option value="ProperName">ProperName</option>
<option value="pmdec">pmdec</option>
<option value="rv">rv</option>
<option value="mag">mag</option>
<option value="absmag">absmag</option>
<option value="spect">spect</option>
<option value="ci">ci</option>
<option value="x">x</option>
<option value="y">y</option>
<option value="z">z</option>
<option value="vx">vx</option>
<option value="vy">vy</option>
<option value="vz">vz</option>
<option value="rarad">rarad</option>
<option value="decrad">decrad</option>
<option value="pmrarad">pmrarad</option>
<option value="pmdecrad">pmdecrad</option>
<option value="bayer">bayer</option>
<option value="flam">flam</option>
<option value="con">con</option>
<option value="comp">comp</option>
<option value="comp_primary">comp_primary</option>
<option value="base">base</option>
<option value="lum">lum</option>
<option value="var">var</option>
<option value="var_min">var_min</option>
<option value="var_max">var_max</option>
</select>
<input type="text" name="Star2Value1"></br>
<!--

-->
<select name="Star2Select2">Or select two options
<option value="id">id</option>
<option value="hip">hip</option>
<option value="hd">hd</option>
<option value="hr">hr</option>
<option value="gl">gl</option>
<option value="BayerFlamsteed">BayerFlamsteed</option>
<option value="Proper">Proper</option>
<option value="RightAscension">RightAscension</option>
<option value="Declination">Declination</option>
<option value="Distance">Distance</option>
<option value="ProperName">ProperName</option>
<option value="pmdec">pmdec</option>
<option value="rv">rv</option>
<option value="mag">mag</option>
<option value="absmag">absmag</option>
<option value="spect">spect</option>
<option value="ci">ci</option>
<option value="x">x</option>
<option value="y">y</option>
<option value="z">z</option>
<option value="vx">vx</option>
<option value="vy">vy</option>
<option value="vz">vz</option>
<option value="rarad">rarad</option>
<option value="decrad">decrad</option>
<option value="pmrarad">pmrarad</option>
<option value="pmdecrad">pmdecrad</option>
<option value="bayer">bayer</option>
<option value="flam">flam</option>
<option value="con">con</option>
<option value="comp">comp</option>
<option value="comp_primary">comp_primary</option>
<option value="base">base</option>
<option value="lum">lum</option>
<option value="var">var</option>
<option value="var_min">var_min</option>
<option value="var_max">var_max</option>
</select>
<input type="text" name="Star2Value2"></td>
</tr>
</table>
<input type="submit" name='submit'>
</form>
<h2>This is a table featuring 20000 stars, Otherwise Your Web Browser may crash</h2>
<p>What page would you like to visit? (Stars separated into multiple pages to prevent the web browser from crashing)</p>
<form action="ALLlist.php" method="post">
<input type="SUBMIT" name="NEXTPAGE" value="1">
<input type="SUBMIT" name="NEXTPAGE" value = "2">
<input type="SUBMIT" name="NEXTPAGE" value="3">
<input type="SUBMIT" name="NEXTPAGE" value="4">
<input type="SUBMIT" name="NEXTPAGE" value="5">

</form>
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
$password = "";
$dbname = "astronomyproject";
try {
	$_statement = "SELECT * FROM starlist LIMIT 20000;";

	//if someone changed page
	if(isset($_POST['NEXTPAGE'])){
		echo($_POST['NEXTPAGE']);
		if($_POST['NEXTPAGE'] == 1){
			$_statement = "SELECT * FROM starlist LIMIT 20000;";
		}
		if($_POST['NEXTPAGE'] == 2){
			$_statement = "SELECT * FROM starlist LIMIT 20000 OFFSET 20000;";
		}
		if($_POST['NEXTPAGE'] == 3){
			$_statement = "SELECT * FROM starlist LIMIT 20000 OFFSET 40000;";
		}
		
		if($_POST['NEXTPAGE'] == 4){
			$_statement = "SELECT * FROM starlist LIMIT 20000 OFFSET 60000;";
		}
		if($_POST['NEXTPAGE'] == 5){
			$_statement = "SELECT * FROM starlist LIMIT 20000 OFFSET 80000;";
		}
		if($_POST['NEXTPAGE'] == 5){
			$_statement = "SELECT * FROM starlist LIMIT 20000 OFFSET 100000;";
		}
	}

		
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($_statement); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</body>
</html>
