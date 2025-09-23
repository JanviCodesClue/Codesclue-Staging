# WordPress Setup Guide for CodesClue Theme

This guide will help you set up your CodesClue WordPress theme and migrate your existing HTML content to WordPress.

## Prerequisites

- WordPress 6.0 or higher
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

## Installation Steps

### 1. Install WordPress

1. Download WordPress from [wordpress.org](https://wordpress.org/download/)
2. Upload WordPress files to your web server
3. Create a MySQL database
4. Run the WordPress installation wizard
5. Complete the basic WordPress setup

### 2. Install the CodesClue Theme

1. Upload the theme files to `/wp-content/themes/codesclue/`
2. Go to **Appearance → Themes** in WordPress admin
3. Activate the "CodesClue" theme

### 3. Install Required Plugins

Install and activate these recommended plugins:

#### Essential Plugins
- **Contact Form 7** - For contact forms
- **Yoast SEO** - For SEO optimization
- **Wordfence Security** - For security

#### Optional Plugins
- **WP Rocket** - For caching
- **Smush** - For image optimization
- **UpdraftPlus** - For backups

### 4. Configure Theme Settings

Go to **Appearance → Customize** to configure:

#### Header Settings
- Upload your logo
- Set site title and tagline
- Configure contact information

#### Contact Information
- Phone: +91-99989-77764
- Email: info@codesclue.com
- Address: STC-915, Cross Road, Near Ambli - Bopal Road, Ambli, Ahmedabad - 380058

#### Social Media Links
- Facebook, Twitter, LinkedIn, Instagram, etc.

#### Colors & Typography
- Primary color: #108aff
- Secondary color: #333333
- Choose fonts for headings and body text

### 5. Create Pages

Create the following pages in WordPress:

#### Home Page
1. Go to **Pages → Add New**
2. Title: "Home"
3. Template: "Home Page"
4. Publish the page
5. Go to **Settings → Reading**
6. Set "Homepage displays" to "A static page"
7. Select "Home" as your homepage

#### About Us Page
1. Go to **Pages → Add New**
2. Title: "About Us"
3. Template: "About Us Template"
4. Add content about your company
5. Publish the page

#### Services Page
1. Go to **Pages → Add New**
2. Title: "Services"
3. Template: "Services Template"
4. Publish the page

#### Portfolio Page
1. Go to **Pages → Add New**
2. Title: "Portfolio"
3. Template: "Portfolio Template"
4. Publish the page

#### Contact Us Page
1. Go to **Pages → Add New**
2. Title: "Contact Us"
3. Template: "Contact Us Template"
4. Publish the page

### 6. Add Custom Post Types Content

#### Services
1. Go to **Services → Add New**
2. Add your services with:
   - Title (e.g., "Web Development")
   - Description
   - Featured image
   - Service icon (Font Awesome class)
   - Service link (optional)
   - Service features (comma-separated)
   - Service order (for display order)

#### Portfolio
1. Go to **Portfolio → Add New**
2. Add your projects with:
   - Title
   - Description
   - Featured image
   - Client name
   - Project URL (optional)
   - Technologies used (comma-separated)
   - Portfolio category

#### Team
1. Go to **Team → Add New**
2. Add team members with:
   - Name
   - Position
   - Bio
   - Featured image
   - LinkedIn URL (optional)
   - Twitter URL (optional)
   - Team order

#### Testimonials
1. Go to **Testimonials → Add New**
2. Add testimonials with:
   - Client name
   - Testimonial content
   - Client company
   - Client position
   - Rating (1-5 stars)

### 7. Set Up Menus

1. Go to **Appearance → Menus**
2. Create a new menu called "Primary Menu"
3. Add pages to the menu:
   - Home
   - About Us
   - Services
   - Portfolio
   - Contact Us
4. Set menu location to "Primary Menu"

### 8. Configure Widgets

1. Go to **Appearance → Widgets**
2. Add widgets to:
   - Sidebar
   - Footer Widget 1, 2, 3

### 9. Upload Images

1. Go to **Media → Add New**
2. Upload all images from your HTML site
3. Organize them in folders if needed
4. Update image URLs in your content

### 10. Configure Contact Form

#### Option 1: Contact Form 7
1. Install Contact Form 7 plugin
2. Create a new form with fields:
   - Name (required)
   - Email (required)
   - Phone
   - Company
   - Service Required
   - Budget
   - Message (required)
3. Copy the shortcode to your contact page

#### Option 2: Use Built-in Form
The theme includes a built-in contact form that will work automatically.

### 11. SEO Configuration

1. Install Yoast SEO plugin
2. Configure basic SEO settings
3. Set up Google Analytics
4. Create XML sitemap
5. Submit sitemap to Google Search Console

### 12. Performance Optimization

1. Install a caching plugin (WP Rocket recommended)
2. Optimize images with Smush
3. Enable GZIP compression
4. Use a CDN if available
5. Optimize database

## Content Migration Checklist

### Pages to Create
- [ ] Home Page
- [ ] About Us
- [ ] Services
- [ ] Portfolio
- [ ] Contact Us
- [ ] Team
- [ ] Testimonials
- [ ] Blog
- [ ] Privacy Policy
- [ ] Terms of Service

### Content to Add
- [ ] Company information
- [ ] Service descriptions
- [ ] Portfolio projects
- [ ] Team member profiles
- [ ] Client testimonials
- [ ] Blog posts
- [ ] Contact information

### Images to Upload
- [ ] Logo
- [ ] Hero images
- [ ] Service icons
- [ ] Portfolio images
- [ ] Team photos
- [ ] Client logos
- [ ] Background images

### Links to Update
- [ ] Internal navigation links
- [ ] Social media links
- [ ] Contact information
- [ ] External links

## Customization Options

### Colors
- Primary: #108aff
- Secondary: #333333
- Accent: #ff6b35
- Background: #ffffff
- Text: #333333

### Fonts
- Headings: Inter, sans-serif
- Body: Inter, sans-serif
- Special: Bebas Neue, sans-serif

### Layout Options
- Full-width pages
- Sidebar layout
- Custom page templates
- Responsive design

## Troubleshooting

### Common Issues

1. **Images not displaying**
   - Check file permissions
   - Verify image paths
   - Regenerate thumbnails

2. **Contact form not working**
   - Check email configuration
   - Verify form fields
   - Test with different email providers

3. **Menu not displaying**
   - Check menu location
   - Verify menu items
   - Clear cache

4. **Custom post types not showing**
   - Check post status
   - Verify template files
   - Check for conflicts

### Performance Issues

1. **Slow loading**
   - Enable caching
   - Optimize images
   - Use CDN
   - Minimize plugins

2. **Database issues**
   - Optimize database
   - Clean up unused data
   - Update regularly

## Security Checklist

- [ ] Use strong passwords
- [ ] Enable two-factor authentication
- [ ] Keep WordPress updated
- [ ] Use security plugins
- [ ] Regular backups
- [ ] SSL certificate
- [ ] Secure hosting

## Maintenance

### Regular Tasks
- Update WordPress core
- Update plugins and themes
- Backup website
- Monitor performance
- Check for broken links
- Review analytics

### Monthly Tasks
- Review security logs
- Update content
- Check SEO performance
- Test contact forms
- Review user feedback

## Support

For technical support:
- Email: support@codesclue.com
- Phone: +91-99989-77764
- Documentation: Check theme documentation
- Community: WordPress forums

## Additional Resources

- [WordPress Codex](https://codex.wordpress.org/)
- [WordPress.org](https://wordpress.org/)
- [Contact Form 7 Documentation](https://contactform7.com/docs/)
- [Yoast SEO Guide](https://yoast.com/wordpress-seo/)

---

**Note**: This guide assumes you have basic knowledge of WordPress. If you need help with any specific step, please contact our support team. 