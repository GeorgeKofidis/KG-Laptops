<?php
    $search_value = $_POST['search'];

    $con = mysqli_connect("localhost","root","","e-laptops");

    if(!$con){
        die("Cannot connect to mysql");
    }

    mysqli_select_db($con,"e-laptops");

    $result = mysqli_query($con,"select * from laptops where laptop_name like '%$search_value%'");
    $row = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title> Search Result </title>
        <meta charset = "utf-8">
        <link href ="style.css" rel="stylesheet">
        <style>
            .button {
             background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
      </head>
    <body class = "body">
          <br/>
          <h2 class = "h2">
              Αποτελέσματα Αναζήτησης
          </h2>
          <table width = "100%" border="6">
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
                while($row){
                    echo "<tr><td>".$row['id_laptop']."</td>";
                    echo "<td>".$row['laptop_name']."</td>";
                    echo "<td>".$row['cpu']."</td>";
                    echo "<td>".$row['ram']."</td>";
                    echo "<td>".$row['storage']."</td>";
                    echo "<td>".$row['gpu']."</td>";
                    echo "<td>".$row['cost']."</td>";
                    echo "</tr>";
                    $row = mysqli_fetch_array($result);
                }  
            ?>
        </table>
        <br/>
        <br/>

        <div style = 'float:center'>
            <button type="button" class="button button1"><a href = "computer.php"> Μετάβαση στην σελίδα </a></button>   
        </div>
</body>
</html>
