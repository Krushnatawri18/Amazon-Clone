<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'amazondb') or die("Connection failed: " . mysqli_connect_error());

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);

    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `repassword`) VALUES ('$name', '$email', '$password', '$repassword')";

    $query = mysqli_query($conn, $sql);
    if ($query) 
    {
        echo "Registration successful";
    } 
    else 
    {
        echo "Registration unsuccessful: " . mysqli_error($conn); // Add this line for database error details
    }


}
?>
