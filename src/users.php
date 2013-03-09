<?php
ini_set("session.use_cookies",0);
ini_set("session.use_trans_sid",1);
session_id($_GET['session_id']);
session_start();
if(!$_SESSION['logged']){
    header("Location: login.php");
    exit;
}
?>
<html>
<head>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['username'] ?></h1>
<p>You are logged in as an <?php echo $_SESSION['permissions'] ?></p>
<a href="logout.php">Log Out</a>
</body>
</html>
