# Onke Portfolio Theme - Setup & Connection Guide

## Overview

The Onke Portfolio theme is now fully integrated as a WordPress-compatible theme with proper file organization and connections. All files are structured to work together seamlessly.

## How Everything is Connected

### 1. **Theme Entry Point: `index.php`**
- This is the main template file WordPress looks for
- Calls `get_header()` at the top to load `header.php`
- Calls `get_footer()` at the bottom to load `footer.php`
- Contains all the portfolio sections (Hero, About, Skills, Projects, Certifications, Contact)

### 2. **Header: `header.php`**
- Contains HTML structure (`<!DOCTYPE>`, `<html>`, `<head>`, `<body>`)
- Uses `wp_head()` hook to load stylesheets, scripts, and metadata
- Includes the navigation menu from WordPress
- Uses `language_attributes()` for proper HTML lang attribute
- Uses `bloginfo()` to get charset from WordPress settings

### 3. **Footer: `footer.php`**
- Closes the HTML structure
- Uses `wp_footer()` hook to load critical scripts and tracking codes
- Contains closing `</body>` and `</html>` tags

### 4. **Theme Functions: `functions.php`**
- **Sets up the theme** with WordPress support
- **Enqueues stylesheets**: Loads `style.css` and Google Fonts
- **Registers navigation menus**: Creates menu areas for WordPress
- **Adds theme support** for title tags, custom logos, and post thumbnails
- This is the "control center" that connects everything together

### 5. **Styles: `style.css`**
- Contains WordPress theme header information (required for theme recognition)
- All UI styling for the portfolio
- CSS variables for easy color customization
- Responsive design rules

### 6. **Assets: `assets/` folder**
- `profile.jpg`: Your profile photo used in the Hero section
- Organized location for images and media

## File Relationships

```
Browser Request (http://localhost:8000 or WordPress site)
    ↓
index.php (main template entry point)
    ├─→ get_header() → header.php
    │   └─→ wp_head() (from functions.php)
    │       ├─→ style.css (enqueued by functions.php)
    │       └─→ Google Fonts (enqueued by functions.php)
    ├─→ Content (hero, about, skills, projects, etc.)
    └─→ get_footer() → footer.php
        └─→ wp_footer()
```

## WordPress Hooks Used

### `functions.php` Implementation:

1. **`after_setup_theme`** hook:
   - Adds theme support for title tags
   - Registers custom logo support
   - Enables post thumbnails
   - Registers navigation menus

2. **`wp_enqueue_scripts`** hook:
   - Enqueues the main stylesheet
   - Enqueues Google Fonts (Montserrat, Inter, Roboto)

### `header.php` WordPress Functions:

- `language_attributes()` - Sets proper language
- `bloginfo( 'charset' )` - Gets site charset
- `wp_head()` - Critical for WordPress to load scripts/styles

### `footer.php` WordPress Function:

- `wp_footer()` - Critical for WordPress to load footer scripts

## How to Customize

### 1. **Add Your Content**
Edit `index.php` sections:
- Update hero text, skills, projects, and certifications
- Replace `assets/profile.jpg` with your photo

### 2. **Customize Colors**
Edit `:root` variables in `style.css`:
```css
:root {
  --bg-primary: #121212;        /* Change background */
  --primary: #007AFF;           /* Change primary accent */
  --cta: #FFB300;               /* Change button color */
}
```

### 3. **Add Custom Functionality**
Edit `functions.php` to:
- Register custom post types
- Add widget areas
- Include custom scripts

### 4. **Create Navigation Menu**
In WordPress admin:
1. Go to **Appearance > Menus**
2. Create a new menu
3. Assign it to **Primary Menu** location

## Setup Checklist

- [x] Theme files created and organized
- [x] `functions.php` created with WordPress hooks
- [x] `header.php` updated with `wp_head()`
- [x] `footer.php` updated with `wp_footer()`
- [x] `index.php` updated to use `get_header()` and `get_footer()`
- [x] `style.css` updated with WordPress theme header
- [x] Asset folders organized
- [x] Translation support added

## Running the Theme

### As WordPress Theme:
1. Place `onke-portfolio` folder in `/wp-content/themes/`
2. Activate from **Appearance > Themes**

### As Standalone PHP:
```bash
cd onke-portfolio
php -S localhost:8000
```

## Testing Connections

To verify everything is properly connected:

1. Check HTML output - Should see `wp_head()` content in `<head>`
2. Check styles - `style.css` should load properly
3. Check responsive design - Works on all screen sizes
4. Check navigation - Links should scroll to sections

## Common Customization Tasks

### Change Site Title
In WordPress admin under Settings > General

### Update Navigation
In WordPress admin under Appearance > Menus

### Add Custom Logo
In WordPress admin under Appearance > Customize > Site Identity

### Modify Theme Colors
Edit CSS variables in `style.css`

## Support

For questions about theme setup or customization, refer to the `README.md` file or review the WordPress theme handbook: https://developer.wordpress.org/themes/
