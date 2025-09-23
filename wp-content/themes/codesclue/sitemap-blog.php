<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

$urls = [
     ['loc' => 'https://www.codesclue.com/blog/blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/iosupdate-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/move-digital-business-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/cannabis-production-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/saas-software-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/future-cannabis-ai-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/taxiapp-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/pwa-app-cannabis-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/wireframe-project-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/mongodb-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/therapix-web-app-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/expressjs-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
     ['loc' => 'https://www.codesclue.com/blog/greenReleaf-dutchie-blog.html', 'priority' => '0.8', 'changefreq' => 'daily', 'lastmod' => $today],
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
