<?php
    $con = mysqli_connect("localhost","root","","e-laptops");

    if(!$con){
        die("Cannot connect to mysql");
    }
    mysqli_select_db($con,"e-laptops");

    $result = mysqli_query($con,"select * from admin");
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href ="style.css" rel="stylesheet">
    
    <title>Dashboard</title>
</style>
</head>
<body class = "body">
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
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
                    <li class = "active"><a href="login.html">Είσοδος</a></li>
                  </ul>
                  <form class="navbar-form navbar-left" action="search.php" method = "POST">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-default">Αναζήτηση</button>
                  </form>
                </div>
              </nav>
         </nav>
         <br/>
         <div style= 'float:center'>
            <h1 class = "h1"> Στοιχεία Διαχειριστή </h1> 
        </div>
        <br/>
        <div style = 'float:center'>
        <table class = "table" border = "6">
            <tr>
                <td> <b>ID_ADMIN</b> </td>
                <td> <b> Username </b> </td>
                <td> <b> Password </b> </td>
            </tr>
            <?php
            while($row){
                echo "<tr><td>".$row['id_admin']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "</tr>";
                $row = mysqli_fetch_array($result);
            }
            ?>
        </table>
        <div class="container"> 
            <button type="button" class="btn btn-default btn-lg btn-block"><a href = "create.php"> Δημιουργία Νέου Διαχειριστή </a></button>
            <br/>
            <button type="button" class="btn btn-default btn-lg btn-block"><a href = "update.php"> Ενημέρωση Ενός Διαχειριστή </a></button>
            <br/>
            <button type="button" class="btn btn-default btn-lg btn-block"><a href = "delete.php"> Διαγραφή Ενός Διαχειριστή </a></button>
        </div>
        <div style="background-color: lightblue; padding: 5px;text-align: center; margin-top: 80px;">
		    <p>
                <b> KG-Laptop International, Inc</b> <br/>
		        &copy; 2022 All rights reserved.
		    </p>
	    </div>
    </div>
</body>
</html>

