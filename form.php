<?php
if(!empty($_POST))
{
    if(!empty($_POST['loginname']))
    {
        session_start();
        $_SESSION['loginname'] = $_POST['loginname'];
        header('Location: index.php');
        exit();
    } else {
        header('location: login.php');
        exit();
    } 
} else {
    header('Location: login.php');
    exit();
}