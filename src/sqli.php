<?php
// Intentionally vulnerable to SQL Injection
$conn = new mysqli("db", "root", "password", "vuln_db");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // UNSAFE QUERY (SQLi possible)
    $query = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($query);
    
    while ($row = $result->fetch_assoc()) {
        echo "Product: " . $row["name"];
    }
}
?>

<a href="?id=1">View Product 1</a>