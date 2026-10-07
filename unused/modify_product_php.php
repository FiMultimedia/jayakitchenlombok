<?php
$content = file_get_contents('product.php');

// Parse products before replacing
$pattern = '/<div class="product-card" data-brand="(.*?)">.*?<img src="(.*?)" alt=".*?">.*?<h3 class="product-title">(.*?)<\/h3>.*?<p class="product-desc">(.*?)<\/p>.*?<a href="(.*?)"/s';
preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);
file_put_contents('products_data.json', json_encode($matches));

// Replace the block
$new_content = preg_replace('/<section class="products-grid" id="productsGrid">.*?<\/section>/s', 
'<section class="products-grid" id="productsGrid">
        <?php
        include \'db.php\';
        
        $sql = "SELECT * FROM products ORDER BY id ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $brand = htmlspecialchars($row[\'brand\']);
                $image = htmlspecialchars($row[\'image\']);
                $name = htmlspecialchars($row[\'name\']);
                $desc = htmlspecialchars($row[\'description\']);
                $slug = htmlspecialchars($row[\'slug\']);
                ?>
                <div class="product-card" data-brand="<?php echo strtolower($brand); ?>">
                    <div class="product-img" onclick="openLightbox(\'<?php echo $image; ?>\')">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                    </div>
                    <div class="product-info">
                        <span class="product-brand"><?php echo strtoupper($brand); ?></span>
                        <h3 class="product-title"><?php echo $name; ?></h3>
                        <p class="product-desc"><?php echo $desc; ?></p>
                        <a href="product_detail.php?slug=<?php echo urlencode($slug); ?>" class="btn-ask">
                            <i class="fa-solid fa-eye"></i> Lihat Detail Produk
                        </a>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p style=\'grid-column: 1/-1; text-align: center;\'>Belum ada produk atau koneksi database gagal.</p>";
        }
        $conn->close();
        ?>
    </section>', $content);
file_put_contents('product.php', $new_content);
?>
