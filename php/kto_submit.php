<?php
if (isset($_GET["imienazwisko"]) && isset($_GET["kimjest"])) {
    $imienazwisko = $_GET["imienazwisko"];
    $kimjest = $_GET["kimjest"];

    $con = new mysqli("localhost", "root", "", "tvpinfo");
    $q1 = "SELECT * FROM kto";
    $q2 = "INSERT INTO kto VALUES('', '" . $imienazwisko . "', '" . $kimjest . "')";

    $wynik = $con->query($q1);
    if (($wynik->num_rows) == 0) {
        $wynik = $con->query($q2);
    } else {
        echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
    }

    $con->close();
}

header('Location: ../imienazwisko.html');