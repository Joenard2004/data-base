
<?php
# (this is also a comment , this is a php code use to update
# reservation form like the time and date of the reservation 

/*

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contactnum = $_POST["contactnum"];

    try {
        require_once "dbh.inc.php";
                    #'reservation' is the name of your db 
        $query = "UPDATE reservation SET fname = :fname, lname = :lname WHERE id = 1;";

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



