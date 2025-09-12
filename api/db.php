<?php


class db{
    public function getAll(){
        $localhost = 'localhost';
        $username= 'root';
        $password= 'mtume';
        $database= 'taskapp';


        $conn = new mysqli($localhost, $username, $password, $database);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";

        $getUsers = "SELECT * FROM users ORDER BY name ASC";
        $result = $conn->query($getUsers);

        if ($result->num_rows > 0) {
            $i=1;
        while($row = $result->fetch_assoc()) {
            echo "<p>"."$i. " . $row["name"]." - " . $row["email"]."</p>";
            $i++;
        }} else {
            echo "0 results.";
        }

    }
}




?>