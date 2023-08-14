<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    print_r($_POST);
    echo "hey there";
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $familyname = $_POST["familyname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirmpwd = $_POST["confirmpwd"];
    $phonenumber = $_POST["phonenumber"];
    $dateofbirth = $_POST["dateofbirth"];

    try {
        require_once 'dbh.php';
        require_once 'signup_model.php';
        require_once 'signup_contr.php';

        $errors = [];

        if (is_input_empty($firstname, $middlename, $lastname, $familyname, $email, $pwd, $confirmpwd, $phonenumber, $dateofbirth)) {
            $errors["empty_input"] = "Fill in all  fields!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_phonenumber_taken($pdo, $phonenumber)) {
            $errors["phonenumber_taken"] = "Phone number already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registerd!";
        }

        require_once 'session.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("location: index.php");
            die();
        }

        create_user($pdo, $firstname, $middlename, $lastname, $familyname, $email, $pwd, $confirmpwd, $phonenumber, $dateofbirth);

        header("index.php?signup=succes");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die ("Connection faild: " . $e->getmessage());
    }

} else {
    header("location: index.php");
    die();
}