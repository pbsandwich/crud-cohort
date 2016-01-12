<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php

    // Example using MySQLi procedural
    $servername = "localhost";
    $username = "pbsandwich";
    $password = "";
    $dbname = "crud";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Perform query
    $sql = "SELECT * FROM people";
    $result = mysqli_query($conn, $sql);
    // Display results
    if (mysqli_num_rows($result) > 0) {
        /* Display results in a table */
        echo "<div class='crud'><h2>People Table List</h2>\n";
        echo "<table>\n";
        echo "<tr>
        <th class='col1'>ID</th>
        <th class='col2'>Name</th>
        <th class='col3'>Password</th>";        
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["ID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . " password:" . $row["password"]. "<br>";
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
    mysqli_close($conn);
?>