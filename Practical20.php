<?php
// Set a cookie named "user" with value "abc", expires in 1 hour
setcookie("user", "abc", time() + 3600); // 3600 seconds = 1 hour
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<h2>PHP Cookie Example</h2>

<?php
if (isset($_COOKIE["user"])) {
    echo "<p>Welcome back, <strong>" . $_COOKIE["user"] . "</strong>!</p>";
    echo "<script>alert('Welcome back, " . $_COOKIE["user"] . "!');</script>";
} else {
    echo "<p>Cookie named 'user' is not set yet!</p>";
}
?>

</body>
</html>
