<?php
    session_start();
    if(isset($_SESSION['user'])){

    }  
    else
    {
        header("location:login_admin?msg= No Access");
    }
?>



