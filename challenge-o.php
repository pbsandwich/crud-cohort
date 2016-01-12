<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php

    // Example using MySQLi procedural
    $servername = "localhost";
    $username = "pbsandwich";
    $password = "";
    $dbname = "crud";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        /* Display results in a table */
        echo "<div class='crud'><h2>People Table List</h2>\n";
        echo "<table>\n";
        echo "<tr>
        <th class='col1'>ID</th>
        <th class='col2'>Name</th>
        <th class='col3'>Password</th>";         
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            extract($row); 
            echo "<tr>\n
            <td class='col1'>$ID</td>\n
            <td class='col2'>$firstname $lastname</td>\n
            <td class = 'col3'>$password</td>\n
            </tr></div>\n"; 
        }
    } else {
        echo "0 results";
    }
    // Close connection
    $conn->close();
?>