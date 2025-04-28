<?php
// Intentionally vulnerable to XSS
if (isset($_GET["name"])) {
    echo "Hello, " . $_GET["name"] . "!"; // No sanitization (XSS possible)
}
?>

<form method="GET">
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>