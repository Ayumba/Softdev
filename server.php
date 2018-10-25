<?php

class Database
{
    var $host = "127.0.0.1";
    var $user = "root";
    var $pass = "";
    var $db = "user";

    public function connect()
    {
        $con = mysqli_connect("$this->host", "$this->user", "$this->pass", "$this->db");
        return $con;
    }

    public function saveRecords($tbName, $firstname, $lastname, $username, $password)
    {
        $conn = $this->connect();

        if (!$conn) {
            die("connection failed" . mysqli_connect_error());
        }

        mysqli_query($conn, "INSERT into $tbName (firstname, lastname, username, password) VALUES ('$firstname','$lastname', '$username','$password')");
    }
}

?>
<?php
$obj = new Database();

extract($_POST);

if (isset($save)) {
//here admin is table name, $userName and $pass  entered by html form
    $obj->saveRecords("Registration", $firstname, $lastname, $username, $password);

    echo "Records Saved ";
}
?>
