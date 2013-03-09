<?php
ini_set("session.use_cookies",0);
ini_set("session.use_trans_sid",1);
session_start();
$session_id = session_id();
if(isset($_POST['submit'])){
    try
    {
        $db = new PDO("sqlite:../db/vulnerable.sqlite3");
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $usr = ($_POST['username']);
    $pas = ($_POST['password']);
    try
    {
        $results = $db->query("SELECT * FROM users WHERE username='$usr' AND password='$pas'");
    }
    catch(Exception $e)
    {
        $msg = $e->getMessage();
    }
    try
    {
        foreach($results as $row) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['logged'] = TRUE;
            $_SESSION['fname'] = $row['username'];
            $_SESSION['permissions'] = $row['permissions'];
            $page = "Location: users.php?session_id=" . $session_id;
            header( $page );
            exit;
        }
    }
    catch(Exception $e)
    {
         $msg = $e->getMessage();
    }
    header("Location: login_page.php?msg=" . urlencode($msg));
    exit;

}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php");     
    exit; 
} 
?>
