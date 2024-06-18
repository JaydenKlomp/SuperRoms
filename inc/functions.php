<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superroms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to list ROMs
function list_roms($conn) {
    $sql = "SELECT id, name, image_path, genre, downloads, rating, file_size FROM roms";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $image_path = 'files/img/' . $row["image_path"];
            echo "<div class='rom-item'>";
            echo "<a href='details.php?id=" . $row["id"] . "'>";
            echo "<img src='" . $image_path . "' alt='" . $row["name"] . "'>";
            echo "</a>";
            echo "<div class='rom-title'>" . $row["name"] . "</div>";
            echo "<div class='rom-genre'>" . $row["genre"] . "</div>";
            echo "<div class='rom-details'>";
            echo "<p><i class='fas fa-download'></i> " . number_format($row["downloads"]) . "</p>";
            echo "<p><i class='fas fa-star'></i> " . $row["rating"] . "/5</p>";
            echo "<p><i class='fas fa-hdd'></i> " . $row["file_size"] . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No ROMs found.";
    }
}

// Function to list consoles
function list_consoles($conn) {
    $sql = "SELECT id, name, image_path FROM consoles";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $image_path = 'files/img/' . $row["image_path"];
            echo "<div class='console-item'>";
            echo "<img src='" . $image_path . "' alt='" . $row["name"] . "'>";
            echo "</div>";
        }
    } else {
        echo "No consoles found.";
    }
}

// Function to get ROM details
function get_rom_details($conn, $rom_id) {
    $sql = "SELECT * FROM roms WHERE id = $rom_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
