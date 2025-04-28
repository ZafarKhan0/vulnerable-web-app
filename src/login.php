<?php
// Intentionally vulnerable login system (SQL Injection possible)
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("db", "root", "password", "vuln_db");
    
    $username = $_POST["username"];
    $password = $_POST["password"]; // No hashing (vulnerable)
    
    // UNSAFE SQL QUERY (VULNERABLE TO SQLi)
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $_SESSION["logged_in"] = true;
        echo "Login successful!";
    } else {
        echo "Invalid credentials!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>