 <?php

/*if(isset($_POST["tyt"]) && isset($_POST["gat"]) && isset($_POST["rok"]) &&
isset($_POST["oce"]))
{
*/


$conn = mysqli_connect("localhost","root","","dane")
  or die('Blad polonczenia');
mysqli_set_charset($conn, "utf8");

$tyt = $_POST["tyt"];
$gat = $_POST["gat"];
$rok = $_POST["rok"];
$oce = $_POST["oce"];

 

$q = "INSERT INTO filmy(tytul, gatunki_id, rok, ocena) VALUES ('$tyt', '$gat', 
'$rok', '$oce')";
$result = mysqli_query($conn, $q) or die("Problem z odczytem danych");
//$q2 = "SELECT tytul FROM "

	

	echo "Film " .$tyt. " zostal dodany do bazy.";


//}
mysqli_close($conn);
?>
