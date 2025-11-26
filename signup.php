<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }
    if ($password !== $confirm) {
        echo "Passwords do not match!";
        exit;
    }
    // SUCCESS → Redirect to movies page
    header("Location: movies.html");
    exit;
}
?>