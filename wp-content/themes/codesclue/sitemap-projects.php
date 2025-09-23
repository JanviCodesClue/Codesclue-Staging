<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

$urls = [
    ['loc' => 'https://www.codesclue.com/projects/greenreleaf.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/projects/therapix.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/projects/trackntake.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
];

foreach ($urls as $url) {
    echo "  <url>\n";
    echo "    <loc>{$url['loc']}</loc>\n";
    echo "    <lastmod>{$url['lastmod']}</lastmod>\n";
    echo "    <changefreq>{$url['changefreq']}</changefreq>\n";
    echo "    <priority>{$url['priority']}</priority>\n";
    echo "  </url>\n";
}

echo "</urlset>";
?>
