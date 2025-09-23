<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

$urls = [
    // Technology
    ['loc' => 'https://www.codesclue.com/technology/technology-flutter.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-reactnative.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-android.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-ios.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-nodejs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-angular.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-ror.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/technology/technology-reactjs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
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
