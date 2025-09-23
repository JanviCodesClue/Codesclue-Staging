<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

// Example URLs - Replace with dynamic fetching from a database
$urls = [
    ['loc' => 'https://www.codesclue.com/artifical-intelligence/ai-software-development.html', 'priority' => '1.0', 'changefreq' => 'daily', 'lastmod' => $today],
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
