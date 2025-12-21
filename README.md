# AI Summarizer - TL;DR & Content Summary Buttons

[![WordPress Plugin Version](https://img.shields.io/badge/version-0.4.0-blue.svg)](https://github.com/theaminuli/ai-summarizer/releases)
[![WordPress Compatibility](https://img.shields.io/badge/wordpress-6.1%2B-brightgreen.svg)](https://wordpress.org/)
[![License](https://img.shields.io/badge/license-GPL--2.0--or--later-orange.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-7.4%2B-purple.svg)](https://www.php.net/)

> **Too Long; Didn't Read?** Help your readers save time with intelligent summarization buttons for WordPress.

A powerful Gutenberg block plugin that enables you to add professional "Summarize," "TL;DR," and "Get Summary" buttons to your WordPress content. Perfect for long-form articles, research papers, documentation, and content-heavy websites.

![AI Summarizer Demo](https://via.placeholder.com/800x400.png?text=AI+Summarizer+Demo)

---

## 🎯 What is AI Summarizer?

AI Summarizer provides customizable button blocks designed specifically for content summarization. Whether you're running a news site, blog, documentation portal, or educational platform, this plugin helps readers quickly identify relevant content and navigate long articles efficiently.

### What is TL;DR?

**TL;DR** stands for "Too Long; Didn't Read" - a popular internet acronym used to provide quick summaries of lengthy content. It acknowledges that modern readers often scan content before committing time to read the full article.

## ✨ Key Features

### 🎨 Design & Customization
- **Flexible Layouts** - Horizontal or vertical button arrangements
- **Advanced Styling** - Full control over colors, gradients, typography, borders, and spacing
- **Responsive Design** - Perfect display on mobile, tablet, and desktop
- **Theme Integration** - Works seamlessly with any properly coded WordPress theme
- **Custom Animations** - Built-in hover effects and transitions

### ⚡ Gutenberg Native
- **Block Editor Ready** - Built with WordPress Block API v3
- **Inner Block Support** - Uses core/button blocks for maximum compatibility
- **Block Transformations** - Convert paragraphs or existing buttons into summary groups
- **Live Preview** - See changes in real-time as you edit
- **Template System** - Pre-configured button layouts for quick setup

### ♿ Accessibility First
- **WCAG 2.1 AA Compliant** - Follows WordPress accessibility standards
- **Keyboard Navigation** - Full keyboard support for all interactions
- **Screen Reader Optimized** - Proper ARIA labels and semantic HTML
- **Focus Management** - Clear focus indicators for better usability

### 🚀 Performance
- **Lightweight Code** - Minimal JavaScript and CSS footprint
- **Optimized Loading** - Uses WordPress 6.7+ block manifest system
- **No External Dependencies** - Self-contained with no heavy libraries
- **Fast Registration** - Efficient block registration for quick page loads

### 🤖 AI-Ready (Coming Soon)
- **Chrome Built-in AI** - Integration with Gemini Nano for on-device summarization
- **Multiple Summary Types** - TL;DR, key-points, headlines, teasers
- **Adjustable Length** - Short, medium, or long summaries
- **Format Options** - Bullet points, paragraphs, or structured markdown
- **Multi-language** - Summarize content in 50+ languages

## 🎯 Perfect Use Cases

| Use Case | Description |
|----------|-------------|
| 📝 **Long-Form Articles** | Add "Get Summary" buttons at the top of lengthy blog posts |
| 📚 **Research Papers** | Provide "TL;DR" access to key findings and conclusions |
| 📄 **Documentation** | Help users navigate technical content with quick summaries |
| 📰 **News Websites** | Offer article summaries before the full story |
| 🎓 **Educational Content** | Give students quick access to lesson summaries |
| 💼 **Business Reports** | Executive summary buttons for detailed reports |
| 📱 **Content Heavy Sites** | Improve content consumption and reduce bounce rates |

## 🚀 Installation

### From WordPress.org (Recommended)

1. Go to **Plugins > Add New** in your WordPress admin
2. Search for "AI Summarizer"
3. Click **Install Now** and then **Activate**
4. The block will appear in the Design category in the block editor

### Manual Installation

1. Download the plugin from the [releases page](https://github.com/theaminuli/ai-summarizer/releases)
2. Upload the `ai-summarizer` folder to `/wp-content/plugins/`
3. Activate the plugin through the Plugins menu in WordPress

### From Source

```bash
# Clone the repository
git clone https://github.com/theaminuli/ai-summarizer.git

# Navigate to the plugin directory
cd ai-summarizer

# Install dependencies
npm install

# Build the plugin
npm run build
```

## 📖 Usage

### Basic Setup

1. **Add the Block**
   - Edit any post or page in the Gutenberg editor
   - Click the "+" button to add a new block
   - Search for "Summarize Button"
   - The block will be inserted with default buttons

2. **Customize Buttons**
   - Click on any button to edit its text
   - Change text to "TL;DR", "Quick Summary", "Key Points", etc.
   - Add links to summary sections or external pages
   - Use the toolbar and sidebar to customize styling

3. **Adjust Layout**
   - Select the block
   - In the sidebar, find "Layout Options"
   - Switch between horizontal and vertical orientations
   - Adjust spacing and alignment

### Creating Summary Sections

**Step 1:** Create a summary section in your content:
```markdown
## Summary (TL;DR)

Here's a quick summary of this 3,000-word article:
- Key point 1
- Key point 2
- Key point 3
```

**Step 2:** Add HTML anchor to the heading:
- Select your "Summary" heading block
- In sidebar, go to Advanced → HTML Anchor
- Enter: `summary`

**Step 3:** Link your button:
- Select your summary button
- Click the link icon
- Enter: `#summary`
- Visitors will jump directly to your summary!

### Pro Tips

**For Maximum Engagement:**
- Place summary buttons at the top of long articles
- Use action-oriented text: "Summarize This Article"
- Add urgency: "Busy? Get the 30-Second Summary"
- Include emoji: "⚡ Quick Read" or "📝 Full Article"

**For Better UX:**
- Create vertical button stacks in sidebars
- Use contrasting colors to highlight summary options
- Test different button positions to optimize clicks
- Combine with table of contents for long content

**For Accessibility:**
- Ensure good color contrast (4.5:1 minimum)
- Add descriptive button text (not just "Click Here")
- Test keyboard navigation (Tab, Enter, Escape)
- Use ARIA labels for icon-only buttons

## 🎨 Customization Options

### Visual Styling

**Colors & Backgrounds:**
- Solid colors
- Gradient backgrounds
- Hover state colors
- Text color customization

**Typography:**
- Font family selection
- Font size, weight, and style
- Line height and letter spacing
- Text transform and decoration

**Spacing & Layout:**
- Padding (all sides independently)
- Margin control (top/bottom)
- Gap between buttons (block gap)
- Border radius and shadows

**Borders:**
- Border width, style, and color
- Individual side controls
- Border radius per corner
- Hover border effects

### Layout Options

**Orientation:**
- Horizontal (default) - buttons in a row
- Vertical - stacked buttons

**Alignment:**
- Wide width
- Full width
- Default content width

**Justification:**
- Left, center, right alignment
- Space between
- Space around

## 💻 Development

### Requirements

- **WordPress:** 6.1 or higher
- **PHP:** 7.4 or higher
- **Node.js:** 18+ and npm

### Build Commands

```bash
# Start development mode with hot reload
npm run start

# Build for production
npm run build

# Format code (WordPress standards)
npm run format

# Lint JavaScript
npm run lint:js

# Lint CSS
npm run lint:css

# Create plugin zip for distribution
npm run plugin-zip
```

### Project Structure

```
ai-summarizer/
├── src/                        # Source files (uncompiled)
│   ├── admin/                  # Admin settings (placeholder)
│   └── blocks/                 # Block source files
│       └── summarize-button/   # Main block
│           ├── block.json      # Block metadata & config
│           ├── index.js        # Block registration
│           ├── edit.js         # Editor component (React)
│           ├── save.js         # Frontend save function
│           ├── view.js         # Frontend interactivity (JS)
│           ├── transforms.js   # Block transformations
│           ├── deprecated.js   # Legacy versions
│           ├── style.scss      # Frontend & editor styles
│           └── editor.scss     # Editor-only styles
├── build/                      # Compiled assets (generated)
│   └── blocks/
│       └── summarize-button/
├── ai-summarizer.php           # Main plugin file
├── readme.txt                  # WordPress.org readme
├── README.md                   # This file
├── package.json                # Node dependencies
└── webpack.config.js           # Custom webpack config
```

## 🔮 Roadmap - Future AI Features

We're actively developing intelligent summarization features to make this plugin even more powerful:

### Phase 1: Chrome Built-in AI Integration ✅ In Progress
- [x] Research Chrome Summarizer API (Gemini Nano)
- [x] Design plugin architecture for AI integration
- [ ] Implement on-device summarization
- [ ] Add summary type selection (TL;DR, key-points, headline, teaser)
- [ ] Length controls (short, medium, long)
- [ ] Format options (markdown, plain-text, bullets)

### Phase 2: Advanced Summarization Features
- [ ] **Automatic Summary Generation** - Click button to instantly generate summaries
- [ ] **Multiple Summary Styles**
  - TL;DR (quick 1-sentence overview)
  - Key Points (bullet list of main ideas)
  - Headlines (article title suggestions)
  - Teasers (engaging preview text)
- [ ] **Customizable Summary Length**
  - Short (1-3 sentences / 3 bullets)
  - Medium (3-5 sentences / 5 bullets)
  - Long (5+ sentences / 7 bullets)
- [ ] **Format Control**
  - Paragraph format
  - Bullet point lists
  - Numbered lists
  - Markdown output

### Phase 3: Enhanced Functionality
- [ ] **URL Summarization** - Summarize content from external links
- [ ] **File Upload Support** - Summarize PDF, DOCX, TXT files
- [ ] **Multi-language Support** - Summarize in 50+ languages
- [ ] **Batch Summarization** - Process multiple articles at once
- [ ] **Streaming Summaries** - Real-time summary generation
- [ ] **Summary History** - Save and reuse generated summaries
- [ ] **Custom AI Models** - Integration with OpenAI, Claude, Gemini API

### Phase 4: Professional Features
- [ ] **Summary Templates** - Pre-designed summary formats
- [ ] **A/B Testing** - Test different summary styles
- [ ] **Analytics Dashboard** - Track summary button clicks and engagement
- [ ] **SEO Optimization** - Schema markup for summaries
- [ ] **Summary Cache** - Store summaries for faster loading
- [ ] **Admin Controls** - Global settings and customization options
- [ ] **Summary Shortcodes** - Use summaries anywhere in WordPress
- [ ] **API Access** - Programmatic summary generation

### Phase 5: Advanced AI Features
- [ ] **Contextual Summaries** - Understand article context and audience
- [ ] **Smart Content Detection** - Auto-detect when articles need summaries
- [ ] **Summary Quality Scoring** - Rate and improve summary quality
- [ ] **Multi-document Summarization** - Combine multiple sources
- [ ] **Question-Based Summaries** - Answer specific questions about content
- [ ] **Visual Summaries** - Generate infographics and mind maps
- [ ] **Audio Summaries** - Text-to-speech summary generation
- [ ] **Summary Translations** - Translate summaries to different languages

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

### Ways to Contribute

1. **Report Bugs** - Found a bug? [Open an issue](https://github.com/theaminuli/ai-summarizer/issues)
2. **Suggest Features** - Have an idea? [Submit a feature request](https://github.com/theaminuli/ai-summarizer/issues)
3. **Submit Pull Requests** - Fix bugs or add features
4. **Improve Documentation** - Help make docs clearer
5. **Translations** - Translate the plugin to your language
6. **Spread the Word** - Share with others who might benefit

### Development Workflow

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Make your changes following [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
4. Test thoroughly in WordPress 6.1+
5. Run linters: `npm run lint:js && npm run lint:css`
6. Format code: `npm run format`
7. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
8. Push to the branch (`git push origin feature/AmazingFeature`)
9. Open a Pull Request

### Coding Standards

- **JavaScript**: [WordPress JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)
- **CSS**: [WordPress CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/)
- **PHP**: [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)
- **Accessibility**: [WCAG 2.1 Level AA](https://www.w3.org/WAI/WCAG21/quickref/)

## 📄 License

This plugin is licensed under the GPL-2.0-or-later license. See the [LICENSE](LICENSE) file for details.

## 💬 Support & Community

### Get Help

- **Documentation**: [Full documentation](https://github.com/theaminuli/ai-summarizer/wiki)
- **WordPress.org Support**: [Plugin support forum](https://wordpress.org/support/plugin/ai-summarizer/)
- **GitHub Issues**: [Report bugs or request features](https://github.com/theaminuli/ai-summarizer/issues)
- **Email**: support@theaminul.com

### Stay Updated

- **GitHub**: [Star the repo](https://github.com/theaminuli/ai-summarizer) for updates
- **WordPress.org**: [Follow on WordPress.org](https://wordpress.org/plugins/ai-summarizer/)
- **Blog**: [Read development updates](https://theaminul.com/blog)

## 🙏 Credits

- Built with ❤️ by [theaminul](https://theaminul.com)
- Powered by [@wordpress/scripts](https://www.npmjs.com/package/@wordpress/scripts)
- Following [WordPress Gutenberg](https://github.com/WordPress/gutenberg) patterns
- Inspired by modern summarization tools and the TL;DR movement

### Special Thanks

- WordPress Core Contributors for the amazing Block Editor
- Chrome AI team for the Summarizer API
- All contributors who help improve this plugin
- The WordPress community for continued support

## 📊 Stats & Badges

![GitHub stars](https://img.shields.io/github/stars/theaminuli/ai-summarizer?style=social)
![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dt/ai-summarizer?style=flat-square)
![WordPress Plugin Active Installations](https://img.shields.io/wordpress/plugin/installs/ai-summarizer?style=flat-square)
![WordPress Plugin Rating](https://img.shields.io/wordpress/plugin/rating/ai-summarizer?style=flat-square)

## 📝 Changelog

### [0.1.0] - 2024-06-15
#### Added
- Initial release 🎉
- Horizontal and vertical button layouts
- Full Gutenberg integration
- Comprehensive styling controls
- Block transformations
- WCAG 2.1 AA accessibility
- Responsive design for all devices

[View full changelog →](CHANGELOG.md)

---

<div align="center">

**[⬆ Back to Top](#ai-summarizer---tldr--content-summary-buttons)**

Made with ❤️ for the WordPress Community

[Website](https://theaminul.com) • [GitHub](https://github.com/theaminuli) • [WordPress.org](https://wordpress.org/plugins/ai-summarizer/)

</div>
