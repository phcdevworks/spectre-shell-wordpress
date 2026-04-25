# Spectre WordPress Themes Execution Todo

This todo list is aligned to the current repository and the roadmap in
`ROADMAP.md`. It is scoped to WordPress.org submission readiness, block editor
support, Spectre Icons integration, and CI.

## P0: WordPress Deployment Readiness / Must-Do

- Add required WordPress.org theme headers and compliance files File targets:
  - `spectre-theme/style.css`
  - `spectre-theme/readme.txt`
  - `spectre-theme/screenshot.png`
  - `spectre-theme/functions.php` Acceptance criteria:
  - `style.css` has complete theme header block (Theme Name, Description,
    Version, Author, License, etc.)
  - `readme.txt` is in WordPress.org format
  - `screenshot.png` is 1200×900px and reflects the theme's default appearance
  - Theme passes the WordPress.org theme review requirements

- Add full PHP template coverage File targets:
  - `spectre-theme/index.php`
  - `spectre-theme/single.php`
  - `spectre-theme/page.php`
  - `spectre-theme/archive.php`
  - `spectre-theme/search.php`
  - `spectre-theme/404.php`
  - `spectre-theme/header.php`
  - `spectre-theme/footer.php`
  - `spectre-theme/sidebar.php`
  - `spectre-theme/functions.php` Acceptance criteria:
  - All WordPress standard template hierarchy entries are covered
  - Templates use Spectre UI classes correctly

- Integrate Spectre Icons plugin in theme templates File targets:
  - `spectre-theme/` template files
  - `README.md` Acceptance criteria:
  - Theme templates demonstrate `spectre-icons` shortcode usage
  - README documents how to use `spectre-icons` with this theme
  - Integration works in both classic editor and block editor contexts

- Add Gutenberg block editor support File targets:
  - `spectre-theme/functions.php`
  - `spectre-theme/theme.json`
  - `spectre-theme/assets/` or compiled CSS path Acceptance criteria:
  - `add_theme_support('block-editor-styles')` is registered
  - `theme.json` defines typography, colors, and spacing derived from
    `@phcdevworks/spectre-tokens`
  - Block editor styles are enqueued from Spectre UI
  - Core blocks render correctly within the theme

- Add GitHub Actions CI pipeline File targets:
  - `.github/workflows/ci.yml` Acceptance criteria:
  - CI runs `npm run build` and `npm run check:assets` on push and PR
  - CI runs `npm run lint:php` for PHP syntax validation

## P1: Developer Experience and Ecosystem Integration

- Document WordPress dev workflow File targets:
  - `README.md` Acceptance criteria:
  - Step-by-step local setup guide for WordPress + Vite HMR
  - Documents how to symlink or copy `spectre-theme/` into a local WordPress install
  - Distinguishes `npm run dev` (Vite HMR) from `npm run build` (production)

- Add Elementor integration File targets:
  - `spectre-theme/functions.php`
  - CSS output
  - `README.md` Acceptance criteria:
  - Spectre UI CSS works within Elementor widget contexts
  - `spectre-icons` icon picker confirmed working inside Elementor in this theme
  - Documented in README

## P2: Later / Controlled Improvement

- Evaluate Spectre Shell router (hash mode) for WordPress SPA pages File targets:
  - planning docs Acceptance criteria:
  - Document whether hash-based routing from `spectre-shell-router` is viable
    inside a WordPress page or custom template
  - Implement only if a concrete use case is proven

- Add child theme starter template File targets:
  - `spectre-init` templates Acceptance criteria:
  - `spectre-init` can scaffold a child theme of this base

- Evaluate Beaver Builder support File targets:
  - planning docs Acceptance criteria:
  - Align with `spectre-icons` Beaver Builder roadmap timeline

## Explicitly Out of Scope

- Do not redefine token values or CSS locally
- Do not add PHP plugin logic (belongs in plugin repos like spectre-icons)
- Do not add WooCommerce templates without proven product need

## Recommended Execution Order

1. Theme headers, readme.txt, screenshot.png
2. PHP template coverage
3. Spectre Icons integration
4. Gutenberg / theme.json
5. CI pipeline
6. WordPress dev workflow docs
7. Elementor integration
8. Shell router evaluation
9. Child theme starter
