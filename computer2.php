<?php
    $con = mysqli_connect("localhost","root","","e-laptops");
    if(!$con){
        die("Cannot connect to mysql");
    }

    mysqli_select_db($con,"e-laptops");
    $result = mysqli_query($con,"select * from laptops where laptop_name = 'KG-Βook'");
    $row = mysqli_fetch_array($result);

    $result1 = mysqli_query($con,"select * from laptops where laptop_name = 'KG-VivoBook M513IA'");
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
                  <form class="navbar-form navbar-left" action="search.php" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-default">Αναζήτηση</button>
                  </form>
                </div>
            </nav>
    </nav>
         <br/>
         <br/>
         <div style= 'float:center'>
            <h1 class = "h1"> Laptops </h1>
        </div>
            <div style='float:center'>
                <table class = "table" border = "6">
                    <tr>
                        <th> Εικόνα Laptop </th>
                        <td><img src = "macbook.jpg" class="mx-auto d-block" style="width: 70%" width = "600" height="250">
                        <td colspan="5">
                        Το πιο ισχυρό MacBook Pro είναι εδώ. <br/>
                        Με το εκπληκτικό τσιπ M1 Pro ή M1 Max -το πρώτο KG silicon σχεδιασμένο για επαγγελματίες- έχει πρωτοποριακές επιδόσεις <br/>
                        και εκπληκτική διάρκεια ζωής της μπαταρίας -συνδεδεμένο ή όχι. Με μια εκπληκτική οθόνη Liquid Retina XDR, την καλύτερη κάμερα <br/>
                        και τον καλύτερο ήχο που υπήρξε ποτέ σε φορητό υπολογιστή KG, αλλά και με όλες τις θύρες που χρειάζεστε. <br/>
                         Aυτό το KG-Book είναι ένα... θηρίο!
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
                        <td><img src = "asus.jpg" class="mx-auto d-block" style="width: 70%" width = "600" height="250">
                        <td colspan="5">Με χρώματα που ξεχωρίζουν και το Enter key να κλέβει τις εντυπώσεις, <br/>
                             το  KG-VivoBook χαρίζει στιλ και δυναμισμό στις καθημερινές σου εργασίες. <br/>
                              Με τον προηγμένο επεξεργαστή AMD Ryzen 7 Mobile μπορείς να καταφέρεις τα πάντα. <br/>
                              Ο ταχύτητος SSD, σου προσφέρει όλα όσα χρειάζεσαι για να αυξήσεις την παραγωγικότητά σου.
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
            <button type="button" class="btn btn-default btn-sm btn-block"><a href = "computer.php"> Προηγούμενη σελίδα </a></button>   
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


