<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Toll Entry</title>
</head>
<body>
<h2>Add Vehicle Toll Entry</h2>

<form method="POST">
    Vehicle Number: <input type="text" name="vehicle_no" required><br><br>
    Vehicle Type:
    <select name="vehicle_type">
        <option>Car</option>
        <option>Truck</option>
        <option>Bus</option>
        <option>Bike</option>
    </select><br><br>
    Toll Amount: <input type="number" name="amount" required><br><br>
    <button type="submit" name="submit">Add Entry</button>
</form>

<?php
if (isset($_POST['submit'])) {  
    $vehicle_no = $_POST['vehicle_no'];
    $vehicle_type = $_POST['vehicle_type'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO toll_entries (vehicle_no, vehicle_type, amount) VALUES ('$vehicle_no', '$vehicle_type', '$amount')";

    $var=mysqli_query($conn, $sql);
    if ($var) {
        echo "<p>Entry added successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
   
}
?>

</body>
</html>