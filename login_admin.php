<?php
    require_once("functions.php");
?>

<?php
    $con = mysqli_connect("localhost","root","","e-laptops");
    if(!$con){
        die("Could not connect to database:".mysqli_connect_error());
    }
    if(isset($_POST['login'])){
        $login_username = inject_checker($con, $_POST['user']);
        $login_password = inject_checker($con, $_POST['password']);
        
    if(empty($login_username)){
        echo"Username Field Can not be empty";
    }
    elseif(empty($login_password)){
        echo "Password Field Can not be empty";
    }   
    else{
        $query = " SELECT * FROM `admin` WHERE `username` = '{$login_username}' AND `password` = '{$login_password}' ";
        $run_query = mysqli_query($con, $query);
            
    if(mysqli_num_rows($run_query) == 1){
        session_start();
                
        while($result = mysqli_fetch_assoc($run_query)){
            $user_id = $result['id'];
            $_SESSION['user'] = $user_id;
                    
            header("Location:login_access.php");
        }
    }
    else{
        echo "Login Failed";
    }
    }
    }
?>


