<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href ="style.css" rel="stylesheet">
    <title> Contact With Us </title>
    <style>
    .button1 {
        background-color: rgb(133, 211, 117);
        border: none;
        color: rgb(255, 255, 255);
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
    </head>
<body class ="body">
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
                <li class = "active"><a href="contact.html">Επικοινωνία</a></li>
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
         <div class="container">
  <h2>Παρακαλούμε Συμπληρώστε Την Φόρμα</h2>
  <form class="form-horizontal" action="contact_process.php" method = "POST">
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Όνομα:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="firstname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Επώνυμο:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telephone">Τηλέφωνο:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="telephone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Κινητό Τηλέφωνο:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Σχόλια:</label>
      <div class="col-sm-10">
        <textarea name="message" rows="4" cols="150"> </textarea>
      </div>
    </div>
    <div class="container">        
      <div class="col-sm-offset-2 col-sm-10">
        <input class="btn btn-primary btn-lg" type = "submit" name = "save" value = "Submit"/>
      </div>
    </div>
  </form>
  <div style = 'float:right'>
      <button class="button1 button2"><a href = "contact.html">Προηγούμενη Σελίδα</a></button>
</div>
    
</div>
<?php
    if(isset($_POST["save"])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $con = mysqli_connect("localhost","root","","e-laptops");
        if(!$con){
        die('Could not Connect to mysql:');
    }
        $query = "INSERT INTO contact (name,lastname,email,telephone,phone,message) VALUES ('$firstname','$lastname','$email',
        '$telephone','$phone','$message')";
        mysqli_query($con,$query);
        mysqli_close($con);
        echo "<h5>Η Εγγραφή ολοκληρώθηκε με επιτυχία </h5>";
    }
?>
<div style="background-color: lightblue;padding: 5px;text-align: center; margin-top: 80px;">
		    <p>
                <b> KG-Laptop International, Inc</b> <br/>
		        &copy; 2022 All rights reserved.
		    </p>
	    </div>
    </div>
</body>
</html>

