<?php
$wysylanie = 0;
$uploadOk = 1;
$liczba = $_POST["liczba"];
$arr = array();

for ($i = 1; $i <= $liczba; $i++) {
    array_push($arr, $_POST["czas" . $i]);
}

$con = new mysqli("localhost", "root", "", "tvpinfo");

for ($i = 0; $i < $liczba; $i++) {
    if ($uploadOk == 1) {
        $target_dir = "../img/temp/";
        $target_file = $target_dir . basename($_FILES["fileToUpload" . $i + 1]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload" . $i + 1]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload" . $i + 1]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload" . $i + 1]["name"])) . " has been uploaded.";

                $wynik = $con->query("SELECT * FROM programy");
                if ((($wynik->num_rows) == 0)||($wysylanie == 1)) {
                    $wynik = $con->query("INSERT INTO programy VALUES('', '" . $arr[$i] . "', 'img/temp/" . htmlspecialchars(basename($_FILES["fileToUpload" . $i + 1]["name"])) . "')");
                    $wysylanie = 1;
                } else {
                    echo "<br /><b>Odczekaj, aż zapytanie zostanie zrealizowanie - następnie spróbuj ponownie!</b>";
                }

                echo $liczba;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

if ($uploadOk == 0) {
    $wynik = $con->query("DELETE FROM programy");
}

$con->close();

header('Location: ../program.html');