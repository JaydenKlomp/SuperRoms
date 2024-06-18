<?php
include 'inc/functions.php';

// Get ROM ID from URL
$rom_id = $_GET['id'];

// Fetch ROM details from the database
$rom = get_rom_details($conn, $rom_id);

if (!$rom) {
    die("ROM not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $rom['name']; ?> - SuperROMs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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

    <div class="breadcrumb">
        <a href="index.html">Home</a> > <a href="#">ROMs</a> > <a href="#"><?php echo $rom['console']; ?></a> > <?php echo $rom['name']; ?>
    </div>

    <section class="rom-details">
        <div class="rom-image">
            <img src="files/img/<?php echo $rom['image_path']; ?>" alt="<?php echo $rom['name']; ?>">
        </div>
        <div class="rom-info">
            <h1><?php echo $rom['name']; ?></h1>
            <ul>
                <li><strong>Console:</strong> <?php echo $rom['console']; ?></li>
                <li><strong>Publisher:</strong> <?php echo $rom['publisher']; ?></li>
                <li><strong>Genre:</strong> <?php echo $rom['genre']; ?></li>
                <li><strong>Region:</strong> <?php echo $rom['region']; ?></li>
                <li><strong>Views:</strong> <?php echo number_format($rom['views']); ?></li>
                <li><strong>Downloads:</strong> <?php echo number_format($rom['downloads']); ?></li>
                <li><strong>Released:</strong> <?php echo date('d M Y', strtotime($rom['released'])); ?></li>
                <li><strong>File size:</strong> <?php echo $rom['file_size']; ?></li>
                <li><strong>Rating:</strong> <?php echo $rom['rating']; ?>/5 (<?php echo $rom['votes']; ?> votes)</li>
            </ul>
            <a href="<?php echo $rom['dropbox_link']; ?>" class="download-button">Download Now</a>
        </div>
    </section>

    <section class="rom-description">
        <h2>Introduction</h2>
        <p><?php echo nl2br($rom['description']); ?></p>
    </section>

    <?php include 'inc/footer.php'; ?>
</body>
</html>

<?php
$conn->close();
?>
