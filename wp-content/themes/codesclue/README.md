# CodesClue WordPress Theme

A premium WordPress theme designed for software development companies and technology businesses. This theme provides a modern, responsive design with comprehensive customization options.

## Features

- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Custom Post Types**: Services, Portfolio, Team, Testimonials
- **Custom Meta Boxes**: Enhanced content management
- **Theme Customizer**: Easy customization options
- **SEO Optimized**: Schema markup and meta tags
- **Social Media Integration**: Built-in social sharing
- **Contact Form Support**: Compatible with Contact Form 7
- **Translation Ready**: Internationalization support
- **Performance Optimized**: Fast loading and caching support

## Installation

### Method 1: Upload via WordPress Admin

1. Download the theme files
2. Go to WordPress Admin → Appearance → Themes
3. Click "Add New" → "Upload Theme"
4. Choose the theme zip file and click "Install Now"
5. Activate the theme

### Method 2: Manual Installation

1. Extract the theme files
2. Upload the `codesclue` folder to `/wp-content/themes/`
3. Go to WordPress Admin → Appearance → Themes
4. Activate the "CodesClue" theme

## Setup Instructions

### 1. Required Plugins

Install and activate these recommended plugins:

- **Contact Form 7**: For contact forms
- **Yoast SEO**: For SEO optimization
- **WP Rocket**: For caching (optional)
- **Smush**: For image optimization (optional)

### 2. Theme Customization

Go to **Appearance → Customize** to configure:

#### Header Settings
- Upload your logo
- Configure site title and tagline

#### Hero Section
- Customize hero title and description
- Set call-to-action button text and URL

#### Contact Information
- Add phone number, email, and address
- Configure social media links

#### Colors & Typography
- Choose primary and secondary colors
- Select heading and body fonts

#### Footer Settings
- Customize footer description
- Set copyright text

### 3. Menu Setup

1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages, posts, or custom links
4. Assign to "Primary Menu" location

### 4. Widgets Setup

1. Go to **Appearance → Widgets**
2. Add widgets to:
   - Sidebar
   - Footer Widget 1, 2, 3

### 5. Custom Post Types

The theme includes these custom post types:

#### Services
- Add service details with icons
- Set display order
- Include service links

#### Portfolio
- Add project details
- Include client information
- Add technology stack
- Set project URLs

#### Team
- Add team member profiles
- Include positions and contact info
- Add social media links

#### Testimonials
- Add client testimonials
- Include company information
- Set rating (1-5 stars)

### 6. Content Migration

To migrate your existing HTML content:

1. **Pages**: Create new pages in WordPress and copy content
2. **Images**: Upload to Media Library and update URLs
3. **Links**: Update internal links to use WordPress URLs
4. **Forms**: Replace with Contact Form 7 shortcodes

## File Structure

```
codesclue/
├── style.css                 # Main stylesheet with theme info
├── functions.php             # Theme functions and setup
├── header.php               # Header template
├── footer.php               # Footer template
├── index.php                # Main template
├── front-page.php           # Homepage template
├── single.php               # Single post template
├── page.php                 # Page template
├── archive.php              # Archive template
├── search.php               # Search results template
├── sidebar.php              # Sidebar template
├── inc/
│   ├── template-functions.php  # Additional functions
│   ├── template-tags.php       # Custom template tags
│   └── customizer.php          # Theme customizer
├── assets/
│   ├── css/                    # Stylesheets
│   ├── js/                     # JavaScript files
│   ├── images/                 # Theme images
│   └── fonts/                  # Font files
└── industries/
    └── cannabis-functions.php  # Industry-specific functions
```

## Customization

### Adding Custom CSS

1. Go to **Appearance → Customize → Additional CSS**
2. Add your custom styles

### Modifying Templates

1. Create a child theme for safe modifications
2. Copy template files to child theme
3. Make your modifications

### Adding Custom Fields

The theme includes meta boxes for:
- Service icons and links
- Portfolio client and technology info
- Team member details
- Testimonial ratings

### Custom Page Templates

Create custom page templates by adding:
```php
<?php
/*
Template Name: Custom Template
*/
```

## SEO Features

- Schema markup for articles
- Open Graph meta tags
- Twitter Card support
- Breadcrumb navigation
- Optimized heading structure
- Alt text for images

## Performance Tips

1. **Optimize Images**: Use WebP format when possible
2. **Enable Caching**: Use WP Rocket or similar
3. **Minimize Plugins**: Only use necessary plugins
4. **CDN**: Use a content delivery network
5. **Database Optimization**: Regular cleanup

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## Support

For support and documentation:
- Check the theme documentation
- Contact the development team
- Visit the support forum

## Changelog

### Version 1.0.0
- Initial release
- WordPress 6.0+ compatibility
- Bootstrap 5 integration
- Custom post types
- Theme customizer
- Responsive design

## License

This theme is licensed under the GPL v2 or later.

## Credits

- Bootstrap 5
- Font Awesome
- Google Fonts
- WordPress Core

---

**Note**: This theme is designed for software development companies and technology businesses. It includes industry-specific features and can be customized for other business types. 