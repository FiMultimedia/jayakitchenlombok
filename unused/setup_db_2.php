<?php
$dbHost = '127.0.0.1';
$dbUser = 'root';
$dbPass = '';

$conn = new mysqli($dbHost, $dbUser, $dbPass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS jayakitchen");
$conn->select_db("jayakitchen");

$tableSql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100),
    name VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    slug VARCHAR(255) UNIQUE
)";
$conn->query($tableSql);
$conn->query("TRUNCATE TABLE products");

// We read from the products_data.json that we generated earlier
$json = file_get_contents('products_data.json');
$matches = json_decode($json, true);

if ($matches) {
    $stmt = $conn->prepare("INSERT IGNORE INTO products (brand, name, description, image, slug) VALUES (?, ?, ?, ?, ?)");
    
    foreach ($matches as $match) {
        $brand = trim($match[1]);
        $image = trim($match[2]);
        $name = trim(strip_tags($match[3]));
        $desc = trim(strip_tags($match[4]));
        $url = trim($match[5]);
        
        $slug = preg_replace('/^product\//', '', $url);
        $slug = preg_replace('/\.(php|html)$/', '', $slug);
        
        $stmt->bind_param("sssss", $brand, $name, $desc, $image, $slug);
        $stmt->execute();
    }
    echo "Imported " . count($matches) . " products into DB.\n";
} else {
    echo "No products found in json.\n";
}

$conn->close();
?>
