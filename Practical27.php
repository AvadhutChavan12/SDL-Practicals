<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // default XAMPP password
$dbname = "book_catalog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Catalogue</title>
    <style>
        body {
            font-family: Arial;
        }
        .book {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            width: 300px;
            float: left;
        }
    </style>
</head>
<body>
    <h2>Book Catalogue</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='book'>
                    <h3>" .$row['title']. "</h3>
                    <p><strong>Author:</strong> " . $row['author'] . "</p>
                    <p><strong>Genre:</strong> " . $row['genre'] . "</p>
                    <p><strong>Price:</strong> ₹" . $row['price'] . "</p>
                  </div>";
        }
    } else {
        echo "No books available.";
    }

    $conn->close();
    ?>
</body>
</html>
