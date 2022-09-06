<?php
function test_input($input) {
    if(!empty($input)) {
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    return "";
}

function appendUser(array $user) {
    $users = file_get_contents("users.json");
    $users = !empty($users) ? json_decode($users, true) : array();
    $users[] = $user;
    return file_put_contents("users.json", json_encode($users));
}

function getUsers() {
    $fetchedUsers = file_get_contents("users.json");
    $fetchedUsers = !empty($fetchedUsers) ? json_decode($fetchedUsers, true) : array();
    $users = array();
    foreach ($fetchedUsers as $user) {
        $users[$user["userName"]] = $user;
    }

    return $users;
}

function getUserNames() {
    $users = getUsers();
    return array_keys($users);
}

function verifyPassword($userName, $password) {
    $users = getUsers();
    return isset($users[$userName]) && $users[$userName]["password"] == $password;
}