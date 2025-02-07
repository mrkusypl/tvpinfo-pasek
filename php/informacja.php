<?php
$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM info";
$q2 = "DELETE FROM info";

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