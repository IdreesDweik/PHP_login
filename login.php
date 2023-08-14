<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        $errors = [];

        if (is_input_empty($firstname, $middlename, $lastname, $familyname, $email, $pwd, $confirmpwd, $phonenumber, $dateofbirth)) {
            $errors["empty_input"] = "Fill in all  fields!";
        }

        require_once 'session.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("location: index.php");
            die();
        }

    } catch (PDOException $e) {
        die ("Connection faild: " . $e->getmessage());
    }
} else {
    header("location: index.php");
    die();
}