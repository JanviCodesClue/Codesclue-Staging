<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

// Example URLs - Replace with dynamic fetching from a database
$urls = [
    // Services
    ['loc' => 'https://www.codesclue.com/services/ios.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/android.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/react-native.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/flutter.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/ror.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/nodejs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/reactjs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/angular.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/dotnet.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/js.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/pwa.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/kotlin.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/ipad.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/swift.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/vuejs.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/laravel.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/php.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/softwaretesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/supporttesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/mobiletesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/mongodb.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/htmlpage.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/css.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/java.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/automatedtesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/manualtesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/performancetesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/services/apitesting.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
];

// Example: Fetch URLs from a database (Uncomment and update accordingly)
/*
$pdo = new PDO("mysql:host=localhost;dbname=yourdb", "username", "password");
$stmt = $pdo->query("SELECT slug, updated_at FROM pages");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $urls[] = [
        'loc' => "https://yourwebsite.com/" . $row['slug'],
        'priority' => '0.7',
        'changefreq' => 'monthly',
        'lastmod' => date('Y-m-d', strtotime($row['updated_at']))
    ];
}
*/

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
