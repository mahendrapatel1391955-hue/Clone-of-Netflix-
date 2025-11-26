<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    // Check email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }
    // Save email to a file (optional)
    file_put_contents("emails.txt", $email . PHP_EOL, FILE_APPEND);
    // Redirect to movies page
    header("Location: movies.html");
    exit;
}
?>