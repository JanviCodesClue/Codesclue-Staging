<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

$urls = [
    // Hiring Developer URLs
    ['loc' => 'https://www.codesclue.com/hiring-developer/angular.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/reactjs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/dotnet.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/javascript.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/ios.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/android.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/flutter.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/react-native.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/nodejs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/ror.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/java.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/php.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/automated-qa.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/hiring-developer/manual-qa.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
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
