<?php
header("Content-type: text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$today = date('Y-m-d'); // Get today's date

$urls = [
    ['loc' => 'https://www.codesclue.com/', 'priority' => '1.0', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/about-us.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/team.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/privacy.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/case-studies.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/portfolio.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/our-company.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/contact-us.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/faq.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/testimonials.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
    ['loc' => 'https://www.codesclue.com/career.html', 'priority' => '0.9', 'changefreq' => 'daily', 'lastmod' => $today],
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
