<?
header("Content-Type: text/html");
header("Cache-control: no-cache,no-store");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Parameters List</title>
</head>
<body>

<h2>Query Parameters</h2>

<?php
// Check if there are any query parameters
if (!empty($_GET)) {
    print "<p>In order of appearance:</p>\n";
    print '<ul>';

    // Loop through each query parameter and display key-value pairs
    foreach ($_GET as $key => $value) {
        print "<li><strong>" . htmlspecialchars($key) . ':</strong> ' . htmlspecialchars($value) . "</li>\n";
    }

    print '</ul>';
} else {
    print '<p>No query parameters found.</p>';
}
?>

</body>
</html>
