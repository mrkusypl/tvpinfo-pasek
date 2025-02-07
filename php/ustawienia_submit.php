<?php
$schowajPilne = $_GET["schowajPilne"];
$schowajInfo = $_GET["schowajInfo"];
$wydanieSpecjalne = $_GET["wydanieSpecjalne"];
$schowajProgram = $_GET["schowajProgram"];

$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM ustawienia";

$wynik = $con->query($q1);
if (($wynik->num_rows) == 0) {
    if ($schowajPilne == "on") {
        $wynik = $con->query("INSERT INTO ustawienia VALUES('', 1)");
    }

    if ($schowajInfo == "on") {
        $wynik = $con->query("INSERT INTO ustawienia VALUES('', 2)");
    }

    if ($wydanieSpecjalne == "on") {
        $wynik = $con->query("INSERT INTO ustawienia VALUES('', 3)");
    }

    if ($schowajProgram == "on") {
        $wynik = $con->query("INSERT INTO ustawienia VALUES('', 4)");
    }
} else {
    echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
}

$con->close();

header('Location: ../ustawienia.html');