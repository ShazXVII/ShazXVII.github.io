<?php
// Her deklareres systemvariabler vi skal bruke mot MySQL-basen.
$server = "localhost";
$bruker = "ersk";
$passord = "2gtur1";
$database = "ersk";

// Oppretter kopling med database
$kobling = new mysqli($server, $bruker, $passord, $database);

//Overfører variabler fra skjema i reg_kunder.php til dette skriptet
if(isset($_POST["submit"])) {
	$parts=explode('/', $_POST["dato"]);
	$date="$parts[2]-$parts[1]-$parts[0]";
	$day=$_POST["day"];
	$subject=$_POST["subject"];
	$info=$_POST["info"];
	}

// Hvis noe gikk galt, lager denne en feilmelding. Uten denne, får du ingen :-)
if ($kobling->connect_error) 	{
	die("Noe gikk galt " . $kobling->connect_error);
	}

// SQL-spørring. Helt samme syntax som da vi skrev spørringen inn i kommandolinja
$sql = "INSERT INTO plan (dato, day, subject, info) VALUES ('$date', '$day', '$subject', '$info')";

// Sjekker om alt gikk bra. Feilmelding ellers.
if ($kobling->query($sql) == TRUE) {
	echo "Ny post lagt til";
	}
	else {
		echo "Feil: " . $sql . "<br>" . $kobling->error;
	}
// Kopling lukkes.
$kobling->close();
?>
