<!DOCTYPE html>
<html>
<head>
    <title>Sort Numbers in Ascending Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        input[type="text"] {
            padding: 8px;
            width: 300px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Enter numbers (comma separated):</h2>

<form method="post">
    <input type="text" name="numbers" placeholder="e.g. 7, 3, 10, 5" required>
    <br><br>
    <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];

    // Split the input string into an array
    $inputArray = explode(",", $input);
    $numbers = [];

    // Clean and convert to integers
    foreach ($inputArray as $num) {
        $trimmed = trim($num);
        if (is_numeric($trimmed)) {
            $numbers[] = (int)$trimmed;
        }
    }

    if (!empty($numbers)) {
        // Sort numbers in ascending order
        sort($numbers);
        
        echo "<h3>Sorted Numbers (Ascending Order):</h3>";
        echo implode(", ", $numbers);
    } else {
        echo "<p style='color: red;'>Please enter valid numbers only.</p>";
    }
}
?>

</body>
</html>
