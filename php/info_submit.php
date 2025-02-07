<?php
if (isset($_GET["informacja"])) {
    $informacja = $_GET["informacja"];

    $con = new mysqli("localhost", "root", "", "tvpinfo");
    $q1 = "SELECT * FROM info";
    $q2 = "INSERT INTO info VALUES('', '" . $informacja . "')";

    $wynik = $con->query($q1);
    if (($wynik->num_rows) == 0) {
        $wynik = $con->query($q2);
    } else {
        echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
    }

    $con->close();
}

header('Location: ../info.html');