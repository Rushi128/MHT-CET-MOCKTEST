<?php

session_start();
if(isset($_SESSION['login_user_stud']))
{
    unset($_SESSION['login_user_stud']);
    if(!isset($_SESSION['login_user_stud']))
    {
        header("location:stud_log.php");
    }
}

?>