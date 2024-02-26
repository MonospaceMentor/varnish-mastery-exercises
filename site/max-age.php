<?php
header("Cache-Control: max-age=10");
$utc = new DateTimeZone("UTC");
$date = new DateTime("now", $utc);
$now = $date->format( DateTime::RFC2822 );
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>This page gets cached for 10 seconds</h1>

        <h2>Cache timestamp: <?php echo $now; ?></h2>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Refresh this page</a>
    </body>
</html>
