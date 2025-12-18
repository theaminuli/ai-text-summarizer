# AI Text Summarizer

A WordPress block plugin that adds customizable button groups to your site. Built following WordPress Gutenberg standards for seamless integration.

## Description

AI Text Summarizer is a powerful WordPress block that allows you to create flexible, customizable button groups for your content. Whether you need horizontal navigation buttons, vertical call-to-action stacks, or sophisticated button layouts with custom styling, this block has you covered.

## Features

- **Flexible Layouts**: Create horizontal or vertical button arrangements
- **Full Gutenberg Support**: Compatible with all core button block features
- **Advanced Styling**: 
  - Custom colors and gradients
  - Typography controls
  - Border and spacing options
  - Responsive design
- **Block Transformations**: Convert paragraphs or existing buttons into button groups
- **Accessibility**: Built following WordPress accessibility standards
- **Performance**: Optimized block registration for fast loading

## Installation

### From WordPress.org

1. Go to **Plugins > Add New** in your WordPress admin
2. Search for "AI Text Summarizer"
3. Click **Install Now** and then **Activate**
4. The block will appear in the Design category in the block editor

### Manual Installation

1. Download the plugin from the [releases page](https://github.com/theaminuli/ai-text-summarizer/releases)
2. Upload the `ai-text-summarizer` folder to `/wp-content/plugins/`
3. Activate the plugin through the Plugins menu in WordPress

### From Source

```bash
# Clone the repository
git clone https://github.com/theaminuli/ai-text-summarizer.git

# Navigate to the plugin directory
cd ai-text-summarizer

# Install dependencies
npm install

# Build the plugin
npm run build
```

## Usage

1. Create or edit a post/page in the WordPress block editor
2. Add a new block and search for "Summarize Button"
3. Add individual buttons by clicking the "+" inside the block
4. Customize button text, links, and styles using the block toolbar and sidebar
5. Adjust layout (horizontal/vertical) and spacing in the block settings

## Development

### Requirements

- WordPress 6.1 or higher
- PHP 7.4 or higher
- Node.js 18+ and npm

### Build Commands

```bash
# Start development mode with hot reload
npm run start

# Build for production
npm run build

# Format code
npm run format

# Lint JavaScript
npm run lint:js

# Lint CSS
npm run lint:css

# Create plugin zip
npm run plugin-zip
```

### Project Structure

```
ai-text-summarizer/
├── src/
│   ├── admin/                  # Admin settings
│   ├── blocks/                 # Block source files
│   │   └── summarize-button/   # Summarize Button block
│   │       ├── index.js        # Block registration and edit/save
│   │       ├── block.json      # Block metadata
│   │       └── styles/         # Block-specific styles
│   └── styles/                 # Global styles
├── build/                      # Compiled assets
│   └── summarize-button/
├── ai-text-summarizer.php    # Main plugin file
├── readme.txt                  # WordPress.org readme
└── package.json               # Node dependencies
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This plugin is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for details.

## Support

- [WordPress.org Support Forum](https://wordpress.org/support/plugin/ai-text-summarizer/)
- [GitHub Issues](https://github.com/theaminuli/ai-text-summarizer/issues)

## Credits

Built with [@wordpress/scripts](https://www.npmjs.com/package/@wordpress/scripts) and following [WordPress Gutenberg](https://github.com/WordPress/gutenberg) patterns.

## Changelog

### 0.1.0 - 2024-06-15
#### Added
- Initial release
- Horizontal and vertical button layouts
- Full support for WordPress core button blocks
- Customizable spacing, colors, and typography
- Block transformations
- Accessibility and responsive design support
