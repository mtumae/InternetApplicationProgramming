<?php

require_once '../conf.php';

class db{
    public function getAll($conf){
        $conn = new mysqli($conf['localhost'], $conf['username'], $conf['password'], $conf['database']);
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


    public function addUser($email, $name){

         $conn = new mysqli($conf['localhost'], $conf['username'], $conf['password'], $conf['database']);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

        echo "Connected successfully";
        echo "Adding user $name with email $email";
        }

        $mutation = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $mutation->bind_param("ss", $name, $email);

        if ($mutation->execute()) {
            echo "Successfully added user";
        } else {
            echo "Error: " . $mutation->error;
        }

    }
}





?>