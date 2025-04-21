<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Toll Entries</title>
</head>
<body>
<h2>All Toll Tax Entries</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Vehicle No</th>
        <th>Vehicle Type</th>
        <th>Amount</th>
    </tr>

    <?php
    $sql = "SELECT * FROM toll_entries;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['vehicle_no']}</td>
                    <td>{$row['vehicle_type']}</td>
                    <td>₹{$row['amount']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No entries found.</td></tr>";
    }
    ?>
</table>
</body>
</html>