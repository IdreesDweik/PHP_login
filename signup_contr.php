<?php

declare(strict_types=1);

function is_input_empty(string $firstname, string $middlename, string $lastname, string $familyname, string $email, string $pwd, string $confirmpwd, int $phonenumber, string $dateofbirth) {
    if (empty($firstname) || empty($middlename) || empty($lastname) || empty($familyname) || empty($email) || empty($pwd) || empty($confirmpwd) || empty($phonenumber) || empty($dateofbirth)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_phonenumber_taken(object $pdo, int $phonenumber) {
    if (get_phonenumber($pdo, $phonenumber)) { 
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {
    if (get_email($pdo, $email)) { 
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $firstname, string $middlename, string $lastname, string $familyname, string $email, string $pwd, string $confirmpwd, int $phonenumber, string $dateofbirth) {
    set_user($pdo, $firstname, $middlename, $lastname, $familyname, $email, $pwd, $confirmpwd, $phonenumber, $dateofbirth);
}