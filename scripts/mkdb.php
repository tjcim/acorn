#!/usr/bin/php

<?php

try
{
    //create or open the database
    $file_db = new PDO('sqlite:../db/vulnerable.sqlite3');
    $file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e)
{
    die($error);
}

// Create User Table
$file_db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    username TEXT,
    password TEXT,
    permissions TEXT,
    email TEXT)");

$users = array(
    array('username' => 'admin',
            'password' => 'test',
            'permissions' => 'admin',
            'email' => 'admin@example.com'
        ),
    array('username' => 'user',
            'password' => 'test',
            'permissions' => 'user',
            'email' => 'admin@example.com'
        )
);

$insert = "INSERT INTO users (username, password, permissions, email)
            VALUES (:username, :password, :permissions, :email)";
$stmt = $file_db->prepare($insert);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':permissions', $permissions);
$stmt->bindParam(':email', $email);

foreach ($users as $u) {
    $username = $u['username'];
    $password = $u['password'];
    $permissions = $u['permissions'];
    $email = $u['email'];

    $stmt->execute();
    }


?>
