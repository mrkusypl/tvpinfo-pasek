<?php
$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM czas";
$q2 = "DELETE FROM czas";

if($wynik = $con -> query($q1)) {
    if(($wynik -> num_rows) != 0) {
        while($row = $wynik -> fetch_row()) {
            echo $row[1];
        }

        $wynik = $con -> query($q2);
    } else {
        echo "nul";
    }
}

$con -> close();