<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href ="style.css" rel="stylesheet">
    <style>
          .button1 {
        background-color: lightcyan;
        border: none;
        color: purple;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
}
    .button2 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
        </style>
    <title>Update An Admin</title>
</head>
<body class = "body">
<div style="width: 100;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="home.html">KG-Laptop</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="home.html">Αρχική </a></li>
                <li><a href="company.html">Η Εταιρεία</a></li>
                <li><a href="computer.php">Υπολογιστές</a></li>
                <li><a href="contact.html">Επικοινωνία</a></li>
                <li><a href="login.html">Είσοδος</a></li>
              </ul>
              <form class="navbar-form navbar-left" action="search.php" method = "POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">Αναζήτηση</button>
              </form>
            </div>
          </nav>
          <br/>
          <h3> Αλλαγή Κωδικού Ενός Διαχειριστή </h3>
          <form action = "update.php" method = "post">
            <table class ="table" align = "center" border = "3">
                <tr>
                    <td> <b> Username </b> </td>
                    <td> <b> Password </b> </td>
                    <td> <b> Change Password </b></td>
                </tr>
                <tr>
                    <td> <input type = "text" name = "username"/> </td>
                    <td> <input type = "text" name = "password"/> </td>
                    <td> <input type = "text" name = "newpass"/> </td>
                </tr>
                
                
            </table>
            <p align = "center">
                <input class="button button2" type = "submit" name = "save" value = "Submit"/>
                <input class="button button2" type = "reset" value = "Reset All"/>
                <button class="button1 button2"><a href = "login_access.php">Προηγούμενη Σελίδα</a></button>
            </p>
        </form>
        <?php
            if(isset($_POST["save"])){
        
                $username = $_POST['username'];
                $password = $_POST['password'];
                $passwordNew = $_POST['newpass'];
                $con = mysqli_connect("localhost","root","","e-laptops");
                if(!$con){
                    die('Could not Connect to mysql:');
                }
                $query = "UPDATE `admin` SET `password`='$passwordNew' WHERE `username`='$username'";
                mysqli_query($con,$query);
                mysqli_close($con);
                echo "<h5>Η Ενημέρωση ολοκληρώθηκε με επιτυχία </h5>";
            }
        ?>
         <div style="background-color: lightblue; padding: 5px;text-align: center; margin-top: 80px;">
		    <p>
                <b> KG-Laptop International, Inc</b> <br/>
		        &copy; 2022 All rights reserved.
		    </p>
	    </div>
    </div>
</body>
</html>

