<!DOCTYPE html>
<html lang="en">
<head>

	<?php $pageTitle = "Posts | Philip Milne"; ?>
	<?php include 'includes/header.php'; ?>

</head>

<body>
    <section id="posts" class="content-section">
        <div class="container">
            <h1>Posts</h1>
            <!-- Search input field -->
            <input type="text" class="search-input" id="search-input" placeholder="Search posts..." onkeyup="searchPosts()">
            <div id="posts-list">
                <div class="post">
                    <h2>Timeline</h2>
                    <p>The timeline for this website is below:</p>
                    <p>1. Compile all of my projects with guides and add them onto here for anyone to use.</p>
                    <p>2. Introduce some php to allow for dynamic webpaging and a unique experience per user.</p>
                    <p>3. Allow these posts to be searchable and archived so that you can visit a specific posts web address.</p>
                    <p>4. Let me know if I should add something by sending me an email at pm@philipmilne.co.uk</p>
                </div>
                <div class="post">
                    <h2>Test</h2>
                    <p>Test</p>
                </div>
                <!-- Add more posts here -->
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>

</body>
</html>
