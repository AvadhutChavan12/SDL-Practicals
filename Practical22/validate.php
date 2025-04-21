<!DOCTYPE html>
<html>
<head>
    <title>XML Schema Validator</title>
</head>
<body>

<h2>XML Schema Validation Result</h2>

<?php
libxml_use_internal_errors(true);

$xml = new DOMDocument();
$xml->load("data.xml");

if ($xml->schemaValidate("schema.xsd")) {
    echo "<p style='color: green;'>✅ XML is valid according to schema!</p>";
} else {
    echo "<p style='color: red;'>❌ XML is NOT valid. Errors:</p>";
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        echo "<pre>" . $error->message . "</pre>";
    }
    libxml_clear_errors();
}
?>

</body>
</html>
