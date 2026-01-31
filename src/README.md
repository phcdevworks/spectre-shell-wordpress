# Source Files - Vite WordPress Template

This directory contains your development source files that Vite will compile.

## Structure

```
src/
├── js/
│   └── main.ts          # JavaScript/TypeScript entry point
├── styles/
│   └── main.css         # CSS entry point (includes Tailwind)
└── tokens/              # Design tokens, variables, etc. (optional)
```

## Development

- Edit files here during development
- Changes trigger HMR when running `npm run dev`
- Compiled output goes to `spectre-theme/dist/`

## Adding Files

### JavaScript/TypeScript

Create new files in `js/` and import them in `main.ts`:

```typescript
import "./components/slider";
import "./utils/helpers";
```

### CSS

Create new stylesheets and import in `main.css`:

```css
@import "tailwindcss";
@import "./components/buttons.css";
@import "./layouts/grid.css";
```

### Assets

For images, fonts, etc.:

1. Import in JS/TS files
2. Or place in `public/` folder for static assets
3. Or reference in CSS with relative paths

## Notes

- This folder is NOT deployed to WordPress
- Only the compiled output in `spectre-theme/dist/` is deployed
- Keep this folder in version control
- Add `spectre-theme/dist/` to `.gitignore`
