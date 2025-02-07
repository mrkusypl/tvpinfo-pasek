<?php
if (isset($_GET["liczba"])) {
    $liczba = $_GET["liczba"];
    $arr = array();

    for($i = 1; $i <= $liczba; $i++) {
        array_push($arr, $_GET["info" . $i]);
    }

    $con = new mysqli("localhost", "root", "", "tvpinfo");
    $q1 = "SELECT * FROM info3";

    $wynik = $con->query($q1);
    if (($wynik->num_rows) == 0) {
        for($i = 0; $i < $liczba; $i++) {
            $wynik = $con->query("INSERT INTO info3 VALUES('', '" . $arr[$i] . "')");
        }
    } else {
        echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
    }

    $con->close();
}

header('Location: ../info3.html');