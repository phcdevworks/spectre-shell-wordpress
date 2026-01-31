# Changelog

All notable changes to this project will be documented here. The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/) and the versioning reflects package releases.

## [Unreleased]

## [0.0.1] - 2026-01-31

### Added

- Initial implementation of Vite WordPress theme template with TypeScript and Tailwind CSS 4 ([8704a25]).
- Vite configuration with manifest-based asset loading for WordPress ([8704a25]).
- Tailwind CSS 4 configuration with WordPress template paths ([8704a25]).
- WordPress theme structure with `functions.php`, `header.php`, `footer.php`, and `index.php` ([8704a25]).
- Source files with TypeScript entry point and CSS with Tailwind imports ([8704a25]).
- HMR support for development mode via Vite dev server ([8704a25]).
- Dev/prod mode detection via `WP_ENV` environment variable ([8704a25]).
- GitHub issue templates for bug reports, feature requests, and documentation ([e005b39]).
- Pull request template ([e005b39]).
- CONTRIBUTING.md with development workflow and guidelines ([6202054]).
- CODE_OF_CONDUCT.md based on Contributor Covenant ([1fb4ab3]).
- SECURITY.md with security policy and reporting guidelines ([417b4b4]).
- GitHub funding configuration ([e005b39]).
- VS Code workspace settings and devcontainer configuration ([4f8ddbb], [7b5b0ad]).
- LICENSE (MIT) ([01491e8]).
- CHANGELOG.md following Keep a Changelog format ([0754ae2]).

### Changed

- Renamed project to Spectre Shell WordPress ([b5cf594]).
- Updated package.json with full metadata, keywords, and repository information ([e005b39]).
- Renamed theme folder to `spectre-theme/` and updated references ([bba2b67]).
- Restructured project and updated dependencies ([a38feba]).
- Refactored project structure into template directory ([2e7c5e4]).

### Fixed

- Fixed TypeScript configuration to support Node.js module imports ([e005b39]).
- Installed @types/node for proper TypeScript support ([e005b39]).

### Documentation

- Comprehensive README with setup instructions and customization guide ([8704a25]).
- Revamped README with detailed setup and usage guide ([fe734ee]).
- Theme-specific README in `spectre-theme/` folder ([8704a25]).
- Source-specific README in `src/` folder ([8704a25]).

[unreleased]: https://github.com/phcdevworks/vite-template-spectre-wordpress/compare/v0.0.1...HEAD
[0.0.1]: https://github.com/phcdevworks/vite-template-spectre-wordpress/tree/v0.0.1
[8704a25]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/8704a25
[e005b39]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/e005b39
[6202054]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/6202054
[1fb4ab3]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/1fb4ab3
[417b4b4]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/417b4b4
[4f8ddbb]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/4f8ddbb
[7b5b0ad]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/7b5b0ad
[01491e8]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/01491e8
[0754ae2]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/0754ae2
[b5cf594]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/b5cf594
[bba2b67]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/bba2b67
[a38feba]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/a38feba
[2e7c5e4]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/2e7c5e4
[fe734ee]: https://github.com/phcdevworks/vite-template-spectre-wordpress/commit/fe734ee
