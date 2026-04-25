# Spectre WordPress Themes Roadmap

This roadmap is grounded in the current repository shape and public context of
`@phcdevworks/spectre-wordpress-themes` as it exists today.

`@phcdevworks/spectre-wordpress-themes` is the WordPress theme foundation for
the Spectre suite. It provides a Vite-powered build pipeline, TypeScript entry
point, Tailwind CSS 4 integration, and a standard `spectre-theme` WordPress
directory that consumes `@phcdevworks/spectre-tokens` and `@phcdevworks/spectre-ui`
as upstream contracts.

The WordPress push is real and active. `spectre-icons` is already live on
WordPress.org with 100+ active installs. This theme is the next major surface in
that ecosystem push.

## 1. Current Repo Assessment

### Current strengths

- Vite build pipeline is in place and compiles TypeScript and CSS correctly.
- Tailwind CSS 4 is integrated.
- The theme consumes `@phcdevworks/spectre-tokens` and `@phcdevworks/spectre-ui`
  without redefining their contracts locally.
- Asset contract validation (`check:assets`) is in place.
- The PHP theme structure exists in `spectre-theme/`.

### Current gaps to harden

- No Gutenberg block editor support — the current theme is classic-theme only.
- No Elementor integration beyond what the `spectre-icons` plugin provides.
- The theme is not yet ready for WordPress.org submission (missing required
  theme headers, screenshot, and compliance review).
- No Spectre Shell integration — there is no mechanism for SPA-style navigation
  within the theme.
- Vite HMR with WordPress dev mode is functional but not documented clearly.
- `spectre-icons` plugin integration is not yet wired into the theme.
- No PHP template library — the `spectre-theme/` directory has minimal template
  coverage.

### Missing policy, docs, or tests that would improve quality

- WordPress.org submission requirements checklist
- Integration test for Vite asset compilation output
- Documentation for the WordPress dev workflow (local WP + Vite HMR)
- Clear guidance for theme child-theme usage

## 2. Roadmap

## P0: WordPress Deployment Readiness / Must-Do

### P0.1 WordPress.org Theme Submission Readiness

Objective Bring the theme to a state where it can be submitted to WordPress.org
and used as a production theme foundation.

Why it matters The WordPress push is a primary channel for Spectre adoption. A
publishable theme is the anchor surface for that push.

Suggested deliverables

- Required theme headers in `style.css` (Theme Name, Description, Version, etc.)
- `screenshot.png` (1200×900px) showing the theme's default appearance
- PHP template coverage for: `index.php`, `single.php`, `page.php`, `archive.php`,
  `search.php`, `404.php`, `header.php`, `footer.php`, `sidebar.php`
- WordPress.org compliance review pass (no TGM Plugin Activation, no obfuscated
  code, license consistency)
- `readme.txt` in WordPress.org format

Dependency notes

- This is the top priority for the WordPress push

Risk if skipped

- The theme remains a developer tool rather than a deployable product

### P0.2 Spectre Icons Plugin Integration

Objective Wire the `spectre-icons` WordPress plugin into the theme so icons are
available out of the box.

Why it matters `spectre-icons` is already live on WordPress.org with 100+ active
installs. The theme should demonstrate the plugin in context and serve as the
canonical integration reference.

Suggested deliverables

- PHP template helpers or Twig/Blade partials that use Spectre icon shortcodes
- Documentation in `README.md` on using `spectre-icons` with this theme
- Example icon usage in at least one default template

Dependency notes

- Depends on template coverage from P0.1

Risk if skipped

- The plugin and theme exist in isolation instead of as a cohesive product

### P0.3 Gutenberg Block Editor Support

Objective Add block editor (Gutenberg) theme support to make the theme
compatible with the default WordPress editing experience.

Why it matters WordPress is moving fully toward the block editor. A theme that
does not support it cannot be recommended for new WordPress projects.

Suggested deliverables

- `add_theme_support('block-editor-styles')` in `functions.php`
- `theme.json` for block editor typography, colors, and spacing from Spectre
  tokens
- Enqueue block editor styles from Spectre UI
- Test with common core blocks (Paragraph, Heading, Image, Group, Columns)

Dependency notes

- Requires template coverage from P0.1
- `theme.json` values should be derived from `@phcdevworks/spectre-tokens`

Risk if skipped

- Theme is incompatible with the default WordPress editing experience

### P0.4 CI Pipeline

Objective Add a CI pipeline that runs build and asset validation on every push.

Why it matters Without CI, Vite compilation errors and asset contract failures
can ship unnoticed.

Suggested deliverables

- GitHub Actions workflow running `npm run build` and `npm run check:assets`
- PHP lint via `npm run lint:php` in CI

Risk if skipped

- Build and asset regressions ship without catch

## P1: Developer Experience and Ecosystem Integration

### P1.1 Document WordPress Dev Workflow

Objective Write clear documentation for the local WordPress + Vite HMR
development workflow.

Why it matters The current setup requires specific knowledge to run. New
contributors and adopters should not have to reverse-engineer it.

Suggested deliverables

- Step-by-step local setup guide in `README.md`
- Document how to link `spectre-theme/` into a local WordPress install
- Document Vite dev mode vs. production build distinction

Dependency notes

- Low dependencies; can be done now

### P1.2 Elementor Integration

Objective Provide official Elementor support in the theme to match the
`spectre-icons` Elementor integration.

Why it matters `spectre-icons` already supports Elementor. The theme should
align so the full Spectre suite works coherently in Elementor-based builds.

Suggested deliverables

- Elementor-compatible CSS from Spectre UI
- Document Elementor integration in `README.md`
- Confirm `spectre-icons` icon picker works within Elementor in this theme

Dependency notes

- Depends on P0.3 block editor support being in place

### P1.3 Spectre Shell Integration (Optional)

Objective Evaluate whether the Spectre shell router can be used for SPA-style
navigation within the WordPress theme.

Why it matters Some WordPress use cases (single-page admin tools, application
pages) benefit from client-side routing without full-page reloads.

Suggested deliverables

- Investigation document on WordPress + Spectre shell compatibility
- Hash-based routing from `@phcdevworks/spectre-shell-router` is the likely
  mechanism for WordPress deployments
- Implement only if a proven use case emerges

Dependency notes

- Depends on hash routing being implemented in `@phcdevworks/spectre-shell-router`

## P2: Later / Controlled Improvement

### P2.1 Child Theme Framework

Objective Document and scaffold child theme creation from this base theme.

Suggested deliverables

- Child theme starter template in `spectre-init`
- Documentation on overriding templates and styles

### P2.2 Beaver Builder Support

Objective Add Beaver Builder compatibility following the `spectre-icons` plugin
roadmap which lists Beaver Builder as a future integration target.

Suggested deliverables

- Implement when `spectre-icons` ships Beaver Builder support

## 3. Explicitly Out of Scope

- Do not redefine token values or CSS locally — consume from `@phcdevworks/spectre-tokens`
  and `@phcdevworks/spectre-ui`
- Do not add PHP plugin logic here — plugin behavior belongs in separate plugin
  repositories like `spectre-icons`
- Do not add WooCommerce templates unless a proven product need emerges

## 4. Recommended Execution Order

1. WordPress.org submission readiness (templates, headers, screenshot)
2. Spectre Icons plugin integration
3. Gutenberg block editor support (`theme.json`)
4. CI pipeline
5. Document WordPress dev workflow
6. Elementor integration
7. Evaluate Spectre Shell routing for WordPress
8. Child theme framework
9. Beaver Builder support (aligned to spectre-icons roadmap)
