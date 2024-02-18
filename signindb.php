
<?php
// signindb.php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "adejanec_adejanecode001";
    $password= "Jane3435_123";
    $database = "adejanec_projectcode10";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM chart WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id']; // Store the user ID in the session
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: signin.php");
        exit();
    }

    mysqli_close($conn);
}
?>