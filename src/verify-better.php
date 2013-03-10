<?php
ini_set("session.use_cookies",0);
ini_set("session.use_trans_sid",1);
ini_set("display_errors", "On");
error_reporting(E_ALL);
session_start();
$session_id = session_id();
if(isset($_POST['submit'])){
    try
    {
        $db = new PDO("sqlite:../db/vulnerable.sqlite3");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $usr = ($_POST['username']);
    $pas = ($_POST['password']);
    $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $usr, PDO::PARAM_STR);
    $stmt->bindParam(':password', $pas, PDO::PARAM_STR);
    $found = $stmt->execute();
    $results = $stmt->fetchAll();
    // I should test for how many responses are received
    foreach ($results as $user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged'] = TRUE;
        $_SESSION['fname'] = $user['username'];
        $_SESSION['permissions'] = $user['permissions'];
        $page = "Location: users.php?session_id=" . $session_id;
        header( $page );
        exit;
    }
    header("Location: login-better.php");
    exit;

}else{
    header("Location: login-better.php");
    exit;
}
?>
