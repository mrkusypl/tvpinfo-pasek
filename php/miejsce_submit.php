<?php
if (isset($_GET["miejsce"])) {
    $miejsce = $_GET["miejsce"];

    $con = new mysqli("localhost", "root", "", "tvpinfo");
    $q1 = "SELECT * FROM miejsce";
    $q2 = "INSERT INTO miejsce VALUES('', '" . $miejsce . "')";

    $wynik = $con->query($q1);
    if (($wynik->num_rows) == 0) {
        $wynik = $con->query($q2);
    } else {
        echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
    }

    $con->close();
}

header('Location: ../miejsce.html');