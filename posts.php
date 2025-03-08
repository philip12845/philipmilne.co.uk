<!DOCTYPE html>
<html lang="en">
<head>

        <?php $pageTitle = "Posts | Philip Milne"; ?>
        <?php include 'includes/header.php'; ?>

</head>


<?php
$posts = [];

$files = glob("posts/*.php");

// __DIR__ . saving this bit of code it gives an absolute path but doesnt work in the above situation

foreach ($files as $file) {
    $content = file_get_contents($file);
    $wordCount = str_word_count(strip_tags($content));
    $readingTime = ceil($wordCount / 200);
    $modified = filemtime($file);
    
    $posts[] = [
        'path' => $file,
        'name' => basename($file, ".php"),
        'modified' => $modified,
        'readingTime' => $readingTime
    ];
}

// Sort posts by last modified time (most recent first)
usort($posts, fn($a, $b) => $b['modified'] - $a['modified']);

// print_r($files); // for debugging purposes

?>

<body>

<section id="posts" class="content-section">
  <div class="container">
      <h1>Posts</h1>
      <input type="text" class="search-input" id="search-input" placeholder="Search posts..." onkeyup="searchPo>
      <div id="posts-list">

        <?php foreach ($posts as $post): ?>

<div class="post">
            <h2><a href="<?= $post['path'] ?>" class="post-title-link"><?= htmlspecialchars($post['name']) ?></a></h2>
            <p>Last updated: <?= date('Y-m-d H:i:s', $post['modified']) ?></p>
            <p>~<?= $post['readingTime'] ?> min read</p>
        </div>
    <?php endforeach; ?>
</div>
</section>


<?php include 'includes/footer.php'; ?>
<script src="assets/js/script.js"></script>
