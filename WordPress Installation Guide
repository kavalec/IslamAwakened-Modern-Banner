# WordPress Installation Guide

Step-by-step instructions for implementing the modern IslamAwakened banner in WordPress.

## Prerequisites

- WordPress site with admin access
- Child theme (recommended) or ability to edit theme files
- FTP/cPanel access or file manager

## Method 1: Child Theme Implementation (Recommended)

### Step 1: Prepare Your Child Theme

1. **Check if you have a child theme active**
   - Go to `Appearance > Themes`
   - Look for "illuminate-child" or similar
   - If no child theme, create one first

2. **Access your child theme folder**
   - Via FTP: `/wp-content/themes/your-child-theme/`
   - Via cPanel File Manager: Navigate to the same path

### Step 2: Add the CSS

1. **Open your child theme's `style.css`**
2. **Add the Google Fonts import at the very top:**
```css
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Source+Sans+Pro:wght@300;400&display=swap');
```

3. **Add the banner CSS** (copy from banner.css file)

### Step 3: Modify Your Header Template

**Option A: Override header.php**
1. Copy `header.php` from parent theme to child theme
2. Find the existing banner/logo section
3. Replace with:
```php
<div class="islamawakened-banner">
    <div class="banner-content">
        <h1 class="site-title">IslamAwakened</h1>
        <p class="tagline">Helping the West read the Qur'an since 2003</p>
    </div>
</div>
```

**Option B: Use WordPress Customizer**
1. Go to `Appearance > Customize`
2. Look for "Header" or "Site Identity" section
3. Add custom HTML/CSS options if available

### Step 4: Functions.php Method (Alternative)

Add to your child theme's `functions.php`:

```php
<?php
// Enqueue Google Fonts
function islamawakened_fonts() {
    wp_enqueue_style( 
        'islamawakened-fonts', 
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Source+Sans+Pro:wght@300;400&display=swap'
    );
}
add_action( 'wp_enqueue_scripts', 'islamawakened_fonts' );

// Add custom banner CSS
function islamawakened_banner_styles() {
    ?>
    <style>
    /* Paste the banner CSS here */
    </style>
    <?php
}
add_action( 'wp_head', 'islamawakened_banner_styles' );

// Replace site header with custom banner
function islamawakened_custom_header() {
    ?>
    <div class="islamawakened-banner">
        <div class="banner-content">
            <h1 class="site-title">IslamAwakened</h1>
            <p class="tagline">Helping the West read the Qur'an since 2003</p>
        </div>
    </div>
    <?php
}
```

## Method 2: Plugin Approach (Easiest)

### Step 1: Create a Simple Plugin

1. **Create new file**: `wp-content/plugins/islamawakened-banner/islamawakened-banner.php`

2. **Add this code:**
```php
<?php
/*
Plugin Name: IslamAwakened Modern Banner
Description: Modern CSS banner for IslamAwakened website
Version: 1.0
*/

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Enqueue styles and fonts
function islamawakened_banner_assets() {
    wp_enqueue_style(
        'islamawakened-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Source+Sans+Pro:wght@300;400&display=swap'
    );
    
    wp_enqueue_style(
        'islamawakened-banner',
        plugin_dir_url(__FILE__) . 'banner.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'islamawakened_banner_assets');

// Shortcode for banner
function islamawakened_banner_shortcode() {
    return '<div class="islamawakened-banner">
                <div class="banner-content">
                    <h1 class="site-title">IslamAwakened</h1>
                    <p class="tagline">Helping the West read the Qur\'an since 2003</p>
                </div>
            </div>';
}
add_shortcode('islamawakened_banner', 'islamawakened_banner_shortcode');
?>
```

3. **Add the CSS file** `banner.css` in the same folder
4. **Activate the plugin**
5. **Use shortcode** `[islamawakened_banner]` anywhere

## Method 3: Page Builder Integration

### For Elementor:
1. Add HTML widget
2. Paste the banner HTML
3. Add CSS in Elementor's custom CSS section

### For Gutenberg:
1. Add Custom HTML block
2. Paste complete HTML + CSS

## Testing Checklist

- [ ] Banner displays correctly on desktop
- [ ] Banner is responsive on mobile/tablet  
- [ ] Text is crisp and readable
- [ ] Gradient displays properly
- [ ] No conflicts with existing styles
- [ ] Page loads quickly
- [ ] Works in different browsers

## Troubleshooting

**Banner not showing:**
- Check if CSS is loading (view page source)
- Verify HTML structure is correct
- Clear any caching plugins

**Fonts not loading:**
- Ensure Google Fonts URL is correct
- Check for font loading errors in browser console
- Try loading fonts via functions.php instead

**Style conflicts:**
- Add `!important` to critical styles
- Use more specific CSS selectors
- Check theme's existing header styles

## Next Steps

Once installed, you can:
1. Customize colors in the CSS
2. Adjust typography sizes
3. Add animations or additional effects
4. Integrate with your HTML generator
