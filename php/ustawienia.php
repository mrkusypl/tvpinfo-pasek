<?php
$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM ustawienia";
$q2 = "DELETE FROM ustawienia";

$arr = array();

if($wynik = $con -> query($q1)) {
    if(($wynik -> num_rows) != 0) {
        while($row = $wynik -> fetch_row()) {
            array_push($arr, $row[1]);
        }
        echo json_encode($arr);

        $wynik = $con -> query($q2);
    }
}

if($arr == []) {
    echo "nul";
}

$con -> close();