
<?php

$host = "localhost";

$username = "adejanec_adejanecode001";

$password = "Jane3435_123";

$database = "adejanec_projectcode10";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_error()) {

    die("Connection failed: " . mysqli_connect_error());
}

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);

$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

$country = mysqli_real_escape_string($conn, $_POST['country']);

$email = mysqli_real_escape_string($conn, $_POST['email']);

$password = mysqli_real_escape_string($conn, $_POST['password']);

$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);


$query = "INSERT INTO chart (first_name, last_name, country, email, password, confirm_password) 
          VALUES ('$firstname', '$lastname', '$country', '$email', '$password', '$confirm_password')";

$result = mysqli_query($conn, $query);

if (!$result) {

    echo "Query execution failed: " . mysqli_error($conn);

    die();

} else {

    header("Location: signin.php");
    exit();
}

mysqli_close($conn);

?>