<?php
$rootDir = __DIR__;

// Create header.php
$headerContent = <<<EOT
<?php
\$base_url = isset(\$base_url) ? \$base_url : '';
?>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <a href="<?php echo \$base_url; ?>index.php" class="nav-logo">
            <img src="<?php echo \$base_url; ?>assets/icon/android-chrome-512x512.png" alt="Jaya Kitchen Logo"
                style="height: 32px; width: 32px; border-radius: 50%; object-fit: cover;"> Jaya Kitchen
        </a>
        <div class="nav-links" id="navLinks">
            <a href="<?php echo \$base_url; ?>index.php#home">Home</a>
            <a href="<?php echo \$base_url; ?>index.php#about">Tentang Kami</a>
            <a href="<?php echo \$base_url; ?>product.php">Produk & Brand</a>
            <a href="<?php echo \$base_url; ?>sosmed.php">Social Media</a>
            <a href="<?php echo \$base_url; ?>career.php">Karir</a>
            <a href="https://api.whatsapp.com/send?phone=628113970087" target="_blank" class="btn-contact"><i
                    class="fa-brands fa-whatsapp"></i> Hubungi Kami</a>
        </div>
        <button class="mobile-menu-btn" id="mobileMenuBtn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>
EOT;

file_put_contents('header.php', $headerContent);

// Create footer.php
$footerContent = <<<EOT
<?php
\$base_url = isset(\$base_url) ? \$base_url : '';
?>
    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="logo">
                    <img src="<?php echo \$base_url; ?>assets/icon/android-chrome-512x512.png" alt="Jaya Kitchen Logo"
                        style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover;"> Jaya Kitchen
                </div>
                <p>Kitchen Equipment & Commercial Refrigeration Supplier untuk daerah Lombok, Nusa Tenggara Barat dan
                    sekitarnya.</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/jayakitchenlombok/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=628113970087" target="_blank"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a href="mailto:jayakitchenlombok@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>

            <div class="footer-contact">
                <h4 class="footer-title">Informasi Kontak</h4>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Jl. A.A. Gde Ngurah no 99, Cakranegara<br>Lombok, Nusa Tenggara Barat<br>Indonesia</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <span><a href="tel:08113970087">081 139 700 87</a></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span><a href="mailto:jayakitchenlombok@gmail.com">jayakitchenlombok@gmail.com</a></span>
                    </li>
                </ul>
            </div>

            <div class="footer-schedule">
                <h4 class="footer-title">Jam Operasional</h4>
                <ul>
                    <li>
                        <span>Senin - Sabtu</span>
                        <span>08.00 - 17.00</span>
                    </li>
                    <li>
                        <span>Minggu</span>
                        <span>Tutup</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-map"
            style="margin-top: 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0188524408522!2d116.1294559!3d-8.5941852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfb32102c17f%3A0x3253f3eb923a81e4!2sJaya%20Kitchen!5e0!3m2!1sid!2sid!4v1791083600887!5m2!1sid!2sid"
                width="100%" height="350" style="border:0; display: block;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Jaya Kitchen Lombok. All rights reserved.</p>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=628113970087" class="float-wa" target="_blank"
        aria-label="Chat with us on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <script>
        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        if (navbar) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');

        if (mobileMenuBtn && navLinks) {
            mobileMenuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        }
        
        // Scroll Animation
        const observerOptions = {
            threshold: 0.2,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal-left, .reveal-right').forEach(el => {
            if(el) {
                observer.observe(el);
            }
        });
    </script>
EOT;

file_put_contents('footer.php', $footerContent);

function processFile($file, $isSubdir) {
    $content = file_get_contents($file);
    
    // Replace <nav>...</nav>
    $navPattern = '/<nav class="navbar"[^>]*>.*?<\/nav>/s';
    $headerInclude = $isSubdir ? 
        "<?php\n\$base_url = '../';\ninclude '../header.php';\n?>" : 
        "<?php\n\$base_url = '';\ninclude 'header.php';\n?>";
    $content = preg_replace($navPattern, $headerInclude, $content);
    
    // Replace <footer...>...</body>
    $footerPattern = '/<footer\b[^>]*>.*?<\/body>/s';
    $footerInclude = $isSubdir ?
        "<?php include '../footer.php'; ?>\n</body>" :
        "<?php include 'footer.php'; ?>\n</body>";
    $content = preg_replace($footerPattern, $footerInclude, $content);
    
    // Replace HTML extensions with PHP for internal links
    // Just replace "xxx.html" with "xxx.php" for the known pages
    $content = str_replace('"index.html"', '"index.php"', $content);
    $content = str_replace('"career.html"', '"career.php"', $content);
    $content = str_replace('"product.html"', '"product.php"', $content);
    $content = str_replace('"sosmed.html"', '"sosmed.php"', $content);
    $content = str_replace('../index.html', '../index.php', $content);
    $content = str_replace('../career.html', '../career.php', $content);
    $content = str_replace('../product.html', '../product.php', $content);
    $content = str_replace('../sosmed.html', '../sosmed.php', $content);
    
    // Some tags might have # hash, like index.html#home
    $content = str_replace('index.html#', 'index.php#', $content);
    $content = str_replace('product.html#', 'product.php#', $content);
    
    // Ensure we don't end up with weird strings if there are edge cases
    
    $newFile = preg_replace('/\.html$/', '.php', $file);
    file_put_contents($newFile, $content);
    unlink($file); // Remove original HTML file
}

// Process root HTML files
$rootFiles = glob('*.html');
foreach ($rootFiles as $file) {
    processFile($file, false);
}

// Process product HTML files
$productFiles = glob('product/*.html');
foreach ($productFiles as $file) {
    processFile($file, true);
}

echo "Conversion complete!\n";
?>
