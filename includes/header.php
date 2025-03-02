<?php
// If $pageTitle is not set in a page, use a default title
$pageTitle = isset($pageTitle) ? $pageTitle : "Philip Milne | Welcome";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
<link rel= "icon" href="assets/images/philip.jpeg" type="image/x-icon">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">About Me</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="posts.php">Posts</a></li>
        </ul>
    </nav>
</header>
