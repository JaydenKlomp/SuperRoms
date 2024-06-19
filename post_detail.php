<?php
include 'inc/functions.php';

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id='$post_id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Post not found.";
        exit;
    }
} else {
    echo "No post ID specified.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
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
        <section class="post-detail">
            <div class="breadcrumb">
                <a href="index.php">Home</a> > <a href="posts.php">Posts</a> > <span><?php echo $row['title']; ?></span>
            </div>
            <h1><?php echo $row['title']; ?></h1>
            <p class="post-date"><i class="fas fa-calendar-alt"></i> <?php echo $row['date']; ?></p>
            <div class="post-content">
                <?php echo nl2br($row['content']); ?>
            </div>
            <div class="post-actions">
                <a href="#" class="share-button"><i class="fab fa-facebook"></i> Share On Facebook</a>
                <a href="#" class="share-button"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" class="share-button"><i class="fab fa-pinterest"></i> Pinterest</a>
                <a href="#" class="share-button"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="#" class="share-button"><i class="fas fa-envelope"></i> Email</a>
            </div>
            <div class="comment-section">
                <h2>Leave a Comment</h2>
                <form action="submit_comment.php" method="post">
                    <textarea name="comment" placeholder="Comment"></textarea>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <button type="submit">SEND COMMENT</button>
                </form>
            </div>
        </section>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
