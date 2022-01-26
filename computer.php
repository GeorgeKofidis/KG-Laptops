<?php
    $con = mysqli_connect("localhost","root","","e-laptops");
    if(!$con){
        die("Cannot connect to mysql");
    }

    mysqli_select_db($con,"e-laptops");
    $result = mysqli_query($con,"select * from laptops where laptop_name = 'KG-XPS 15 9510'");
    $row = mysqli_fetch_array($result);

    $result1 = mysqli_query($con,"select * from laptops where laptop_name = ' KG-EliteBook 855 G8 '");
    $row1 = mysqli_fetch_array($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href ="style.css" rel="stylesheet">
    <title>Computers</title>
</head>
<body class = "body">
    <div style="width: 100;">
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="home.html">KG-Laptop</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="home.html">Αρχική </a></li>
                    <li><a href="company.html">Η Εταιρεία</a></li>
                    <li class = "active"><a href="computer.php">Υπολογιστές</a></li>
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
         </nav>
         <br/>
         <div style= 'float:center'>
            <h1 class = "h1"> Laptops </h1>
        </div>
            <div style='float:center'>
                <table class = "table" border = "6">
                    <tr>
                        <th> Εικόνα Laptop </th>
                        <td><img src = "dell_xps.jpg" class="mx-auto d-block" style="width: 70%" width = "600" height="250">
                        <td colspan="5"> Φορητός υπολογιστής 15,6", ο οποίος διαθέτει οθόνη με εκλεπτυσμένη σχεδίαση InfinityEdge <br/>
                             και λόγο διαστάσεων 16:10, προσφέροντας χρωματική κάλυψη 100% Adobe RGB με εξαιρετικές λεπτομέρειες, <br/>
                              ενώ περιλαμβάνει επεξεργαστές Intel® Core™ 10ης γενιάς.
                         </td>
                    </tr>
                    <tr>
                        <th> Κωδικός Laptop </th>
                        <th> Όνομα laptop </th>
                        <th> Επεξεργαστής </th>
                        <th> Μνήμη Ram </th>
                        <th> Δίσκος </th>
                        <th> Κάρτα γραφικών </th>
                        <th> Τιμή </th>
                    </tr>
                    <?php
                        echo "<td>".$row['id_laptop']."</td>";
                        echo "<td>".$row['laptop_name']."</td>";
                        echo "<td>".$row['cpu']."</td>";
                        echo "<td>".$row['ram']."</td>";
                        echo "<td>".$row['storage']."</td>";
                        echo "<td>".$row['gpu']."</td>";
                        echo "<td>".$row['cost']."</td>";
                        $row = mysqli_fetch_array($result);
                        
                    ?>
                </table>

        </div>
        <br/>
        <div style='float:center'>
                <table class = "table" border = "6">
                    <tr>
                        <th> Εικόνα Laptop </th>
                        <td><img src = "hp.jpg" class="mx-auto d-block" style="width: 70%" width = "600" height="250">
                        <td colspan="5">Σχεδιασμένος για τον προσωπικό σας τρόπο εργασίας <br/>
                            Το KG-EliteBook 855 σχεδιάστηκε βάσει του τρόπου με τον οποίο εργάζεστε σήμερα. <br/>
                             Αυτός ο εξαιρετικά ελαφρύς και λεπτός επαγγελματικός υπολογιστής που μεταφέρεται εύκολα διατίθεται <br/>
                             με αναλογία οθόνης προς σώμα 85% και ένα αθόρυβο και άνετο πληκτρολόγιο για την εργασία σας.
                        </td>
                    </tr>
                    <tr>
                        <th> Κωδικός Laptop </th>
                        <th> Όνομα laptop </th>
                        <th> Επεξεργαστής </th>
                        <th> Μνήμη Ram </th>
                        <th> Δίσκος </th>
                        <th> Κάρτα γραφικών </th>
                        <th> Τιμή </th>
                    </tr>
                    <?php
                        echo "<td>".$row1['id_laptop']."</td>";
                        echo "<td>".$row1['laptop_name']."</td>";
                        echo "<td>".$row1['cpu']."</td>";
                        echo "<td>".$row1['ram']."</td>";
                        echo "<td>".$row1['storage']."</td>";
                        echo "<td>".$row1['gpu']."</td>";
                        echo "<td>".$row1['cost']."</td>";
                        $row1 = mysqli_fetch_array($result1);
                        
                    ?>
                </table>
        <br/>
        <div style = 'float:center'>
            <button type="button" class="btn btn-default btn-sm btn-block"><a href = "computer2.php"> Επόμενη σελίδα </a></button>   
        </div>
        <div style="background-color: lightblue;padding: 5px;text-align: center; margin-top: 80px;">
		    <p>
                <b> KG-Laptop International, Inc</b> <br/>
		        &copy; 2022 All rights reserved.
		    </p>
	    </div>
    </div>    
</body>
</html>

