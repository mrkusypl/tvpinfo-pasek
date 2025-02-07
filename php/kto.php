<?php
$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM kto";
$q2 = "DELETE FROM kto";

if($wynik = $con -> query($q1)) {
    if(($wynik -> num_rows) != 0) {
        while($row = $wynik -> fetch_row()) {
            $arr = array($row[1], $row[2]);
        }
        echo json_encode($arr);

        $wynik = $con -> query($q2);
    } else {
        echo "nul";
    }
}

$con -> close();