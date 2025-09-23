
// Check if sitemapFiles is already declared to prevent duplicate declaration errors
if (typeof sitemapFiles === 'undefined') {
  const sitemapFiles = [
      'https://www.codesclue.com/sitemap.xml',
      'https://www.codesclue.com/sitemap-blog.xml',
      'https://www.codesclue.com/sitemap-hiringdeveloper.xml',
      'https://www.codesclue.com/sitemap-pages.xml',
      'https://www.codesclue.com/sitemap-services.xml',
      'https://www.codesclue.com/sitemap-technology.xml'
  ];
}

async function fetchAndUpdateSitemaps() {
    for (const url of sitemapFiles) {
        await fetchAndUpdateSitemap(url);
    }
}

async function fetchAndUpdateSitemap(url) {
    try {
        // Fetch the sitemap file
        const response = await fetch(url);
        if (!response.ok) throw new Error(`Failed to fetch ${url} (Status: ${response.status})`);

        const text = await response.text();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(text, "text/xml");

        // Check for parsing errors
        if (!xmlDoc.documentElement || xmlDoc.documentElement.nodeName === "parsererror") {
            throw new Error(`Error parsing ${url}`);
        }

        // Update all <lastmod> dates (Only Date, No Time)
        const lastmodElements = xmlDoc.getElementsByTagName("lastmod");
        const currentDate = new Date().toISOString().split('T')[0]; // Extracts YYYY-MM-DD only

        for (let i = 0; i < lastmodElements.length; i++) {
            lastmodElements[i].textContent = currentDate;
        }

        // Convert updated XML back to string
        const serializer = new XMLSerializer();
        const updatedXML = serializer.serializeToString(xmlDoc);

        // Display success message
        const outputDiv = document.getElementById('xml-output');
        const msg = document.createElement('p');
        msg.textContent = `✅ Updated: ${url}`;
        outputDiv.appendChild(msg);

        // Download updated file
        downloadXML(url.split('/').pop(), updatedXML);
    } catch (error) {
        console.error(`Error processing ${url}:`, error);
    }
}

function downloadXML(filename, xmlContent) {
    const blob = new Blob([xmlContent], { type: "application/xml" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
