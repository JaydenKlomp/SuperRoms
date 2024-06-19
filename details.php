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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">SUPERROMS.COM</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="roms.php">ROMs</a></li>
                <li><a href="emulators.php">Emulators</a></li>
                <li><a href="full-set.php">Full Set (Pack)</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
    </header>

    <div id="content">
        <div class="breadcrumb">
            <a href="index.php">Home</a> &gt; 
            <a href="roms.php">ROMs</a> &gt; 
            <a href="roms.php?console=<?php echo urlencode($rom['console']); ?>"><?php echo $rom['console']; ?></a> &gt; 
            <?php echo $rom['name']; ?>
        </div>
        <section class="rom-details">
            <div class="rom-image">
                <img src="files/img/<?php echo $rom['image_path']; ?>" alt="<?php echo $rom['name']; ?>">
            </div>
            <div class="rom-info">
                <h1><?php echo $rom['name']; ?></h1>
                <table>
                    <tr>
                        <td><i class="fas fa-gamepad"></i> <strong>Console:</strong></td>
                        <td><?php echo $rom['console']; ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-user"></i> <strong>Developer:</strong></td>
                        <td><?php echo $rom['publisher']; ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-tag"></i> <strong>Genre:</strong></td>
                        <td><?php echo $rom['genre']; ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-globe"></i> <strong>Region:</strong></td>
                        <td><?php echo $rom['region']; ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-eye"></i> <strong>Views:</strong></td>
                        <td><?php echo number_format($rom['views']); ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-download"></i> <strong>Downloads:</strong></td>
                        <td><?php echo number_format($rom['downloads']); ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-calendar-alt"></i> <strong>Released:</strong></td>
                        <td><?php echo date('d M Y', strtotime($rom['released'])); ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-archive"></i> <strong>File size:</strong></td>
                        <td><?php echo $rom['file_size']; ?></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i> <strong>Rating:</strong></td>
                        <td><?php echo $rom['rating']; ?>/5 (<?php echo $rom['votes']; ?> votes)</td>
                    </tr>
                </table>
                <a href="<?php echo $rom['dropbox_link']; ?>" class="download-button"><i class="fas fa-download"></i> Download Now</a>
            </div>
        </section>
        <section class="rom-description">
            <h2>Introduction</h2>
            <p><?php echo nl2br($rom['description']); ?></p>
        </section>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>

<?php
$conn->close();
?>
