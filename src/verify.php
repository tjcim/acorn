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
            $page = "Location: users_page.php?session_id=" . $session_id;
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

    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    /*  
    $usr = mysql_real_escape_string($_POST['username']); 
    $pas = hash('sha256', mysql_real_escape_string($_POST['password'])); 
    $sql = mysql_query("SELECT * FROM users_table  
        WHERE username='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['fname'] = $row['first_name']; 
        $_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: users_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: login_page.php"); 
        exit; 
    } 
     */
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.php");     
    exit; 
} 
?>
