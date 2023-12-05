<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contactnum = $_POST["contactnum"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO reservation (fname, lname, email, contactnum) VALUES (?, ?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":contactnum", $contactnum);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../reservation.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../reservation.php");
}