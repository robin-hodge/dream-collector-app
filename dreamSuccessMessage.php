<?php
require 'newDream.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Dream Success!</title>
</head>
<body>
    <nav>
        <a href="index.php">Return to dreams</a>
    </nav>
    <main>
        <?php echo $dreamSuccessMessage ?>
    </main>
</body>
</html>