
<?php
# (this is also a comment , this is a php code use to delete a reservation
# 

/*

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM reservation WHERE fname = :fname, lname = :lname;";

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



