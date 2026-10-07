$html = Get-Content -Raw "d:\laragon\www\jayakitchenmataram\product.html"
$regex = '(?s)<div class="product-card"[^>]*>.*?<img src="([^"]+)".*?alt="([^"]*)".*?<span class="product-brand">([^<]+)</span>\s*<h3 class="product-title">([^<]+)</h3>\s*<p class="product-desc">([^<]+)</p>\s*<a href="([^"]+)"[^>]*>\s*<i[^>]*></i> Tanya Produk Ini\s*</a>\s*</div>'

$matchesCollection = [regex]::Matches($html, $regex)
Write-Output "Found $($matchesCollection.Count) products."
if ($matchesCollection.Count -gt 0) {
    $first = $matchesCollection[0]
    Write-Output "First match Title: $($first.Groups[4].Value)"
    Write-Output "First match Img: $($first.Groups[1].Value)"
    Write-Output "First match Desc: $($first.Groups[5].Value)"
}
