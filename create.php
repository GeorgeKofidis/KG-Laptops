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
    <title>Create An Admin</title>
</head>
<body class = "body">
<div style="width: 100;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="home.html">KG-Laptop</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="home.html">???????????? </a></li>
                <li><a href="company.html">?? ????????????????</a></li>
                <li><a href="computer.php">??????????????????????</a></li>
                <li><a href="contact.html">??????????????????????</a></li>
                <li><a href="login.html">??????????????</a></li>
              </ul>
              <form class="navbar-form navbar-left" action="search.php" method = "POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">??????????????????</button>
              </form>
            </div>
          </nav>
          <br/>
          <h3> ???????????????????? ???????? ?????????????????????? </h3>
          <form action = "create.php" method = "post">
          <table class ="table" align = "center" border = "3">
        <tr>
            <td> Username </td>
            <td> <input type = "text" name = "username"/></td>
        </tr>
        <tr>
            <td> Password </td>
            <td> <input type = "password" name = "password"/></td>
        </tr>
    </table>
    <p align = "center">
        <input class="button button2" type = "submit" name = "save" value = "Submit"/>
        <input class="button button2" type = "reset" value = "Reset All"/>
        <button class="button1 button2"><a href = "login_access.php">?????????????????????? ????????????</a></button>
    </p>
    </form>
    <?php
    if(isset($_POST["save"])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost","root","","e-laptops");
        if(!$con){
        die('Could not Connect to mysql:');
    }
        $query = "INSERT INTO admin (username,password) VALUES ('$username','$password')";
        mysqli_query($con,$query);
        mysqli_close($con);
        echo "<h5>?? ?????????????? ???????????????????????? ???? ???????????????? </h5>";
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

