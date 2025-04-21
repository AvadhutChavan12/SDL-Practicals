<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            padding-left: 5px;
            margin-top: 5px;
        }
        .radio-group {
            margin-top: 10px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #4285f4;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 align="center">Shape Area Calculator (Inheritance)</h2>

<form method="post" action="">
    <label>Select a Shape:</label>
    <div class="radio-group">
        <input type="radio" name="shape" value="triangle" required> Triangle<br>
        <input type="radio" name="shape" value="square"> Square<br>
        <input type="radio" name="shape" value="circle"> Circle<br>
    </div>

    <label>Enter First Value (Base / Side / Radius):</label>
    <input type="number" name="val1" step="any" required>

    <label>Enter Second Value (Height for Triangle, 0 for others):</label>
    <input type="number" name="val2" step="any" required>

    <button type="submit" name="submit">Calculate Area</button>
</form>

<?php
// Base class
class Shape {
    protected $val1, $val2;
    function __construct($val1, $val2) {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }
}

// Triangle subclass
class Triangle extends Shape {
    function area() {
        return 0.5 * $this->val1 * $this->val2;
    }
}

// Square subclass
class Square extends Shape {
    function area() {
        return $this->val1 * $this->val1;
    }
}

// Circle subclass
class Circle extends Shape {
    function area() {
        return 3.1416 * $this->val1 * $this->val1;
    }
}

if (isset($_POST['submit'])) {
    $shape = $_POST['shape'];
    $val1 = floatval($_POST['val1']);
    $val2 = floatval($_POST['val2']);
    $area = 0;

    if ($shape == "triangle") {
        $obj = new Triangle($val1, $val2);
        $area = $obj->area();
    } elseif ($shape == "square") {
        $obj = new Square($val1, 0);
        $area = $obj->area();
    } elseif ($shape == "circle") {
        $obj = new Circle($val1, 0);
        $area = $obj->area();
    }

    echo "<div class='result'>Area of the $shape is: " . round($area, 2) . "</div>";
}
?>

</body>
</html>
