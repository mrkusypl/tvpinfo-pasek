<?php
$con = new mysqli("localhost", "root", "", "tvpinfo");
$q1 = "SELECT * FROM info2";
$q2 = "DELETE FROM info2";

$arr = array();

if($wynik = $con -> query($q1)) {
    if(($wynik -> num_rows) != 0) {
        while($row = $wynik -> fetch_row()) {
            array_push($arr, $row[1]);
        }
        echo json_encode($arr);

        $wynik = $con -> query($q2);
    } else {
        echo "nul";
    }
}

$con -> close();