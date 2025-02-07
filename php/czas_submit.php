<?php
if (isset($_GET["czas"])) {
    $czas = $_GET["czas"];

    $con = new mysqli("localhost", "root", "", "tvpinfo");
    $q1 = "SELECT * FROM czas";
    $q2 = "INSERT INTO czas VALUES('', '" . $czas . "')";

    $wynik = $con->query($q1);
    if (($wynik->num_rows) == 0) {
        $wynik = $con->query($q2);
    } else {
        echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
    }

    $con->close();
}

header('Location: ../czas.html');