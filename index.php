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
                <li><a href="#">ROMs</a></li>
                <li><a href="#">Emulators</a></li>
                <li><a href="#">Full Set (Pack)</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <img src="files/img/banner.jpeg" alt="Banner Image" class="banner-image">
        <div class="search-container">
            <h1>Every single ROM in once place</h1>
            <div class="search-bar">
                <input type="text" placeholder="Enter ROM name for search">
                <button>Search</button>
            </div>
        </div>
    </section>

    <div id="content">
        <section class="welcome">
            <h2>Welcome to SUPERROMS.COM</h2>
            <p>Download over 50,000 classic and modern games for free. We share the full ROM and ISO of the latest Nintendo and PlayStation platforms. Here you can download Redump and No-Intro validated ROMs for free. In addition, we also have some Pokemon hacking games, Mods.</p>
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
