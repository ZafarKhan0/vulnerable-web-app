<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Web App - Security Testing</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #d33; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 10px 0; }
        a { color: #06c; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>🔓 Vulnerable Web App</h1>
    <p>Deliberately insecure pages for security testing:</p>
    
    <ul>
        <li><a href="login.php">🔑 Vulnerable Login</a> (SQL Injection)</li>
        <li><a href="sqli.php">💉 SQL Injection Demo</a></li>
        <li><a href="xss.php">🖥️ XSS Demo</a> (Cross-Site Scripting)</li>
        <li><a href="csrf.php">🔄 CSRF Demo</a> (Cross-Site Request Forgery)</li>
        <li><a href="upload.php">📤 Unrestricted File Upload</a></li>
    </ul>

    <hr>
    <p><small>Warning: This app is intentionally vulnerable. Do not use real credentials!</small></p>
</body>
</html>