<?php
/**
 * CodesClue HTML to WordPress Migration Script
 * 
 * This script helps migrate HTML content to WordPress pages
 * Run this script after installing WordPress and the CodesClue theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Migration Class
 */
class CodesClue_Migration {
    
    public function __construct() {
        add_action('admin_menu', array($this, 'add_migration_page'));
        add_action('wp_ajax_run_migration', array($this, 'run_migration'));
    }
    
    /**
     * Add migration page to admin menu
     */
    public function add_migration_page() {
        add_submenu_page(
            'tools.php',
            'CodesClue Migration',
            'CodesClue Migration',
            'manage_options',
            'codesclue-migration',
            array($this, 'migration_page')
        );
    }
    
    /**
     * Migration page content
     */
    public function migration_page() {
        ?>
        <div class="wrap">
            <h1>CodesClue HTML to WordPress Migration</h1>
            
            <div class="notice notice-info">
                <p><strong>Before running this migration:</strong></p>
                <ul>
                    <li>Make sure WordPress is installed and configured</li>
                    <li>Activate the CodesClue theme</li>
                    <li>Backup your database</li>
                    <li>Upload all images to WordPress Media Library</li>
                </ul>
            </div>
            
            <div class="card">
                <h2>Migration Steps</h2>
                <p>This tool will help you create WordPress pages from your HTML content.</p>
                
                <form method="post" action="">
                    <?php wp_nonce_field('codesclue_migration', 'migration_nonce'); ?>
                    
                    <table class="form-table">
                        <tr>
                            <th scope="row">Create Pages</th>
                            <td>
                                <label><input type="checkbox" name="create_pages[]" value="home" checked> Home Page</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="about" checked> About Us</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="services" checked> Services</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="portfolio" checked> Portfolio</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="contact" checked> Contact Us</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="team" checked> Team</label><br>
                                <label><input type="checkbox" name="create_pages[]" value="testimonials" checked> Testimonials</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Sample Content</th>
                            <td>
                                <label><input type="checkbox" name="create_sample_content" value="1" checked> Create sample content for Services, Portfolio, Team, and Testimonials</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Create Menu</th>
                            <td>
                                <label><input type="checkbox" name="create_menu" value="1" checked> Create primary navigation menu</label>
                            </td>
                        </tr>
                    </table>
                    
                    <p class="submit">
                        <input type="submit" name="run_migration" class="button button-primary" value="Run Migration">
                    </p>
                </form>
            </div>
            
            <div class="card">
                <h2>Manual Migration Steps</h2>
                <p>If you prefer to migrate manually, follow these steps:</p>
                
                <h3>1. Create Pages</h3>
                <ul>
                    <li>Go to <strong>Pages → Add New</strong></li>
                    <li>Create each page with appropriate template</li>
                    <li>Copy content from HTML files</li>
                    <li>Update image URLs to use WordPress Media Library</li>
                </ul>
                
                <h3>2. Add Custom Post Types</h3>
                <ul>
                    <li><strong>Services:</strong> Add your services with icons and descriptions</li>
                    <li><strong>Portfolio:</strong> Add projects with images and details</li>
                    <li><strong>Team:</strong> Add team members with photos and bios</li>
                    <li><strong>Testimonials:</strong> Add client testimonials</li>
                </ul>
                
                <h3>3. Configure Settings</h3>
                <ul>
                    <li>Set up menus in <strong>Appearance → Menus</strong></li>
                    <li>Configure widgets in <strong>Appearance → Widgets</strong></li>
                    <li>Customize theme in <strong>Appearance → Customize</strong></li>
                </ul>
            </div>
        </div>
        <?php
    }
    
    /**
     * Run migration
     */
    public function run_migration() {
        if (!wp_verify_nonce($_POST['nonce'], 'codesclue_migration')) {
            wp_die('Security check failed');
        }
        
        $pages_to_create = isset($_POST['create_pages']) ? $_POST['create_pages'] : array();
        $create_sample_content = isset($_POST['create_sample_content']);
        $create_menu = isset($_POST['create_menu']);
        
        $results = array();
        
        // Create pages
        foreach ($pages_to_create as $page_type) {
            $page_id = $this->create_page($page_type);
            if ($page_id) {
                $results[] = "Created {$page_type} page (ID: {$page_id})";
            }
        }
        
        // Create sample content
        if ($create_sample_content) {
            $this->create_sample_content();
            $results[] = "Created sample content for custom post types";
        }
        
        // Create menu
        if ($create_menu) {
            $menu_id = $this->create_menu();
            if ($menu_id) {
                $results[] = "Created primary navigation menu (ID: {$menu_id})";
            }
        }
        
        wp_send_json_success($results);
    }
    
    /**
     * Create a page
     */
    private function create_page($page_type) {
        $page_data = $this->get_page_data($page_type);
        
        if (!$page_data) {
            return false;
        }
        
        $page_id = wp_insert_post(array(
            'post_title' => $page_data['title'],
            'post_content' => $page_data['content'],
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => $page_data['template']
        ));
        
        return $page_id;
    }
    
    /**
     * Get page data
     */
    private function get_page_data($page_type) {
        $pages = array(
            'home' => array(
                'title' => 'Home',
                'template' => 'page-home.php',
                'content' => 'Welcome to CodesClue - Premium Web & Mobile App Development for Businesses'
            ),
            'about' => array(
                'title' => 'About Us',
                'template' => 'page-about-template.php',
                'content' => 'Learn more about CodesClue and our mission to deliver innovative software solutions.'
            ),
            'services' => array(
                'title' => 'Services',
                'template' => 'page-services-template.php',
                'content' => 'Explore our comprehensive software development services.'
            ),
            'portfolio' => array(
                'title' => 'Portfolio',
                'template' => 'page-portfolio-template.php',
                'content' => 'View our latest projects and success stories.'
            ),
            'contact' => array(
                'title' => 'Contact Us',
                'template' => 'page-contact-template.php',
                'content' => 'Get in touch with us to discuss your project requirements.'
            ),
            'team' => array(
                'title' => 'Our Team',
                'template' => 'page-team.php',
                'content' => 'Meet the talented individuals behind our success.'
            ),
            'testimonials' => array(
                'title' => 'Testimonials',
                'template' => 'page-testimonials.php',
                'content' => 'What our clients say about our services.'
            )
        );
        
        return isset($pages[$page_type]) ? $pages[$page_type] : false;
    }
    
    /**
     * Create sample content
     */
    private function create_sample_content() {
        // Sample services
        $services = array(
            array(
                'title' => 'Web Development',
                'content' => 'Custom web applications built with modern technologies.',
                'icon' => 'fas fa-code',
                'features' => 'Responsive Design, SEO Optimized, Fast Loading'
            ),
            array(
                'title' => 'Mobile App Development',
                'content' => 'Native and cross-platform mobile applications.',
                'icon' => 'fas fa-mobile-alt',
                'features' => 'iOS & Android, Cross-platform, Native Performance'
            ),
            array(
                'title' => 'UI/UX Design',
                'content' => 'User-centered design that enhances user experience.',
                'icon' => 'fas fa-paint-brush',
                'features' => 'User Research, Wireframing, Prototyping'
            )
        );
        
        foreach ($services as $service) {
            $post_id = wp_insert_post(array(
                'post_title' => $service['title'],
                'post_content' => $service['content'],
                'post_status' => 'publish',
                'post_type' => 'services'
            ));
            
            if ($post_id) {
                update_post_meta($post_id, 'service_icon', $service['icon']);
                update_post_meta($post_id, 'service_features', $service['features']);
            }
        }
        
        // Sample portfolio
        $portfolio = array(
            array(
                'title' => 'E-commerce Website',
                'content' => 'A modern e-commerce platform with advanced features.',
                'client' => 'TechCorp Inc.',
                'technologies' => 'React, Node.js, MongoDB'
            ),
            array(
                'title' => 'Mobile Banking App',
                'content' => 'Secure mobile banking application for financial services.',
                'client' => 'BankSecure',
                'technologies' => 'React Native, Firebase, AWS'
            )
        );
        
        foreach ($portfolio as $project) {
            $post_id = wp_insert_post(array(
                'post_title' => $project['title'],
                'post_content' => $project['content'],
                'post_status' => 'publish',
                'post_type' => 'portfolio'
            ));
            
            if ($post_id) {
                update_post_meta($post_id, 'client_name', $project['client']);
                update_post_meta($post_id, 'technologies', $project['technologies']);
            }
        }
        
        // Sample team
        $team = array(
            array(
                'name' => 'John Doe',
                'position' => 'CEO & Founder',
                'bio' => 'Experienced entrepreneur with 10+ years in software development.'
            ),
            array(
                'name' => 'Jane Smith',
                'position' => 'Lead Developer',
                'bio' => 'Full-stack developer specializing in modern web technologies.'
            )
        );
        
        foreach ($team as $member) {
            $post_id = wp_insert_post(array(
                'post_title' => $member['name'],
                'post_content' => $member['bio'],
                'post_status' => 'publish',
                'post_type' => 'team'
            ));
            
            if ($post_id) {
                update_post_meta($post_id, 'position', $member['position']);
            }
        }
        
        // Sample testimonials
        $testimonials = array(
            array(
                'name' => 'Sarah Johnson',
                'content' => 'CodesClue delivered an exceptional website that exceeded our expectations.',
                'company' => 'Digital Solutions',
                'position' => 'Marketing Director',
                'rating' => 5
            ),
            array(
                'name' => 'Mike Wilson',
                'content' => 'Professional team that delivered our project on time and within budget.',
                'company' => 'StartupXYZ',
                'position' => 'CEO',
                'rating' => 5
            )
        );
        
        foreach ($testimonials as $testimonial) {
            $post_id = wp_insert_post(array(
                'post_title' => $testimonial['name'],
                'post_content' => $testimonial['content'],
                'post_status' => 'publish',
                'post_type' => 'testimonials'
            ));
            
            if ($post_id) {
                update_post_meta($post_id, 'client_company', $testimonial['company']);
                update_post_meta($post_id, 'client_position', $testimonial['position']);
                update_post_meta($post_id, 'rating', $testimonial['rating']);
            }
        }
    }
    
    /**
     * Create menu
     */
    private function create_menu() {
        $menu_name = 'Primary Menu';
        $menu_exists = wp_get_nav_menu_object($menu_name);
        
        if (!$menu_exists) {
            $menu_id = wp_create_nav_menu($menu_name);
            
            // Add menu items
            $pages = array('Home', 'About Us', 'Services', 'Portfolio', 'Contact Us');
            
            foreach ($pages as $page_title) {
                $page = get_page_by_title($page_title);
                if ($page) {
                    wp_update_nav_menu_item($menu_id, 0, array(
                        'menu-item-title' => $page_title,
                        'menu-item-object-id' => $page->ID,
                        'menu-item-object' => 'page',
                        'menu-item-status' => 'publish',
                        'menu-item-type' => 'post_type'
                    ));
                }
            }
            
            // Assign menu to location
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
            
            return $menu_id;
        }
        
        return false;
    }
}

// Initialize migration
new CodesClue_Migration(); 