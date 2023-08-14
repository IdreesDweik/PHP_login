<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.php';
        require_once 'login_model.php';
        require_once 'login_contr.php';

        $errors = [];

        if (is_input_empty($email, $pwd)) {
            $errors["empty_input"] = "Fill in all  fields!";
        }

        $result = get_user($pdo, $email);

        if (is_email_wrong($result)) {
            $errors["login-incorrect"] = "Incorrect login info!";
        }

        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login-incorrect"] = "Incorrect login info!";
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