<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = trim($_POST["fname"]);
    $lname = trim($_POST["lname"]);
    $email = trim($_POST["email"]);

    if (!empty($fname) && !empty($lname) && !empty($email)) {
        $file_path = "registrations.csv";

        $file = fopen($file_path, "a");

        fputcsv($file, array($fname, $lname, $email));

        fclose($file);

        header("Location: registrace.php?registration=success");
        exit;
    }
}

header("Location: registrace.php?registration=failed");
exit;
