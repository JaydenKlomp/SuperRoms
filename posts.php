<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'inc/functions.php'; ?>
    <header>
        <div class="logo">SUPERROMS.COM</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="posts.php">Posts</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        <section class="latest-posts">
            <div class="section-header">
                <h2>All Posts</h2>
            </div>
            <div class="post-grid">
                <?php list_posts($conn); ?>
            </div>
        </section>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
