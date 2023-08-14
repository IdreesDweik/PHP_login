<?php

declare(strict_types=1);

function get_phonenumber(object $pdo, int $phonenumber) {
    $query = "SELECT firstname FROM users WHERE phonenumber = :phonenumber;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":phonenumber", $phonenumber);
    $stmt-> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) {
    $query = "SELECT firstname FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt-> execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $firstname, string $middlename, string $lastname, string $familyname, string $email, string $pwd, string $confirmpwd, int $phonenumber, string $dateofbirth) {
    $query = "INSERT INTO users (firstname, middlename, lastname, familyname, email, pwd, confirmpwd, phonenumber, dateofbirth) VALUES (:firstname, :middlename, :lastname, :familyname, :email, :pwd, :confirmpwd, :phonenumber, :dateofbirth);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":middlename", $middlename);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":familyname", $familyname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":confirmpwd", $confirmpwd);
    $stmt->bindParam(":phonenumber", $phonenumber);
    $stmt->bindParam(":dateofbirth", $dateofbirth);
    $stmt-> execute();
}