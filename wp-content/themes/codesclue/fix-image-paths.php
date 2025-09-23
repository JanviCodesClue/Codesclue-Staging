<?php
/**
 * Fix Image Paths Script
 * This script will fix all hardcoded image paths in the theme files
 */

// Get the theme directory
$theme_dir = __DIR__;

// Function to recursively find PHP files
function findPhpFiles($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );
    
    foreach ($iterator as $file) {
        if ($file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }
    
    return $files;
}

// Function to fix image paths in a file
function fixImagePaths($file_path) {
    $content = file_get_contents($file_path);
    $original_content = $content;
    
    // Fix patterns like src="/assets/images/..."
    $content = preg_replace(
        '/src="\/assets\/images\//',
        'src="<?php echo get_template_directory_uri(); ?>/assets/images/',
        $content
    );
    
    // Fix patterns like src="<?php echo get_template_directory_uri(); ?>/assets/images/..." (without leading slash)
    $content = preg_replace(
        '/src="assets\/images\//',
        'src="<?php echo get_template_directory_uri(); ?>/assets/images/',
        $content
    );
    
    // If content was changed, write it back
    if ($content !== $original_content) {
        file_put_contents($file_path, $content);
        echo "Fixed: " . basename($file_path) . "\n";
        return true;
    }
    
    return false;
}

// Main execution
echo "Starting to fix image paths...\n";

$php_files = findPhpFiles($theme_dir);
$fixed_count = 0;

foreach ($php_files as $file) {
    if (fixImagePaths($file)) {
        $fixed_count++;
    }
}

echo "\nCompleted! Fixed $fixed_count files.\n";
echo "Please check your theme files to ensure all image paths are now using get_template_directory_uri().\n";
?> 