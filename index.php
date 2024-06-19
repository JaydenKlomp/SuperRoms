<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMs Download Site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

    <section class="hero">
        <img src="files/img/banner.jpeg" alt="Banner Image" class="banner-image">
        <div class="search-container">
            <h1>Every single ROM in one place</h1>
            <div class="search-bar">
                <input type="text" placeholder="Enter ROM name for search">
                <button>Search</button>
            </div>
        </div>
    </section>

    <div id="content">

        <section class="welcome">
            <h2>Welcome to SUPERROMS.COM</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam non, fugit veniam mollitia optio deserunt minima sequi expedita, odit quisquam quidem repudiandae placeat ipsum sit illum tenetur provident reprehenderit ullam.</p>
        </section>

        <section class="latest-posts">
            <div class="section-header">
                <h2>Most Recent Posts</h2>
                <a href="posts.php" class="view-all-button">View All</a>
            </div>
            <div class="post-grid">
                <?php list_posts($conn); ?>
            </div>
        </section>

        <section class="consoles">
            <div class="section-header">
                <h2>Rom Consoles</h2>
                <a href="#" class="view-all-button">View All</a>
            </div>
            <div class="console-grid">
                <?php list_consoles($conn); ?>
            </div>
        </section>

        <section class="latest-roms">
            <div class="section-header">
                <h2>Latest ROMs</h2>
                <a href="#" class="view-all-button">View All</a>
            </div>
            <div class="rom-grid">
                <?php list_roms($conn); ?>
            </div>
        </section>
        
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
