<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = ''; // Default laragon password is empty

// 1. Connect and create database
$conn = new mysqli($dbHost, $dbUser, $dbPass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS jayakitchen");
$conn->select_db("jayakitchen");

// 2. Create products table
$tableSql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100),
    name VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    slug VARCHAR(255) UNIQUE
)";
$conn->query($tableSql);

// Empty the table first for clean import
$conn->query("TRUNCATE TABLE products");

// 3. Extract products from product.php
$content = file_get_contents('product.php');

$pattern = '/<div class="product-card" data-brand="(.*?)">.*?<img src="(.*?)" alt=".*?">.*?<h3 class="product-title">(.*?)<\/h3>.*?<p class="product-desc">(.*?)<\/p>.*?<a href="(.*?)"/s';
if (preg_match_all($pattern, $content, $matches, PREG_SET_ORDER)) {
    $stmt = $conn->prepare("INSERT INTO products (brand, name, description, image, slug) VALUES (?, ?, ?, ?, ?)");
    
    foreach ($matches as $match) {
        $brand = trim($match[1]);
        $image = trim($match[2]);
        $name = trim(strip_tags($match[3]));
        $desc = trim(strip_tags($match[4]));
        $url = trim($match[5]);
        
        // Convert product/xyz.php or product/xyz.html to just xyz
        $slug = preg_replace('/^product\//', '', $url);
        $slug = preg_replace('/\.(php|html)$/', '', $slug);
        
        $stmt->bind_param("sssss", $brand, $name, $desc, $image, $slug);
        $stmt->execute();
    }
    echo "Imported " . count($matches) . " products into DB.\n";
} else {
    echo "No products found in product.php\n";
}

$conn->close();
?>
