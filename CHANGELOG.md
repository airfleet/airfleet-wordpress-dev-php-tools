# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [4.0.1] - 2026-01-01

### Fixed

- Exclude `patterns` folder for rule Internal.NoCodeFound

## [4.0.0] - 2025-12-12

### Added

- Added `php-parallel-lint/php-parallel-lint` and `php-parallel-lint/php-console-highlighter`

### Changed

- Updated default PHP test version to `8.2-` (>= 8.2)
- Increased minimum_supported_wp_version to 6.8
- Bump `squizlabs/php_codesniffer` to `3.13.5`
- Bump `dealerdirect/phpcodesniffer-composer-installer` to `1.2.0`
- Bump `wp-coding-standards/wpcs` to `3.3.0`
- Bump `phpcompatibility/php-compatibility` to `^10.0.0@dev`
- Bump `phpcompatibility/phpcompatibility-wp` to `^3.0.0@dev`
- Bump `sirbrillig/phpcs-variable-analysis` to `2.13.0`
- Bump `phpcsstandards/phpcsutils` to `1.2.2`

## [3.2.0] - 2023-12-27

### Changed

- Bump squizlabs/php_codesniffer to 3.8.0
- Bump wp-coding-standards/wpcs to 3.0.1
- Bump sirbrillig/phpcs-variable-analysis to 2.11.17
- Bump phpcsstandards/phpcsutils to 1.0.9

### Fixed

- Fixed version incompatibility between direct `php_codesniffer` dependency and `php_codesniffer` included by `wpcs`

## [3.1.0] - 2023-09-04

### Changed

- Disabled rule VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable for views/\*.php template files (Controller and Setup classes not affected)

## [3.0.3] - 2023-07-24

### Fixed

- Bump phpcsstandards/phpcsutils to 1.0.8

## [3.0.2] - 2023-07-11

### Fixed

- Bump phpcsstandards/phpcsutils to 1.0.7

## [3.0.1] - 2023-04-21

### Fixed

- Exclude vendor-scoped and relative wp-content folders from phpcs

## [3.0.0] - 2023-04-20

### Added

- Added dependency phpcsstandards/phpcsutils (without it, phpcs errors out)

### Changed

- Updated dependency squizlabs/php_codesniffer to 3.7.2
- Updated dependency dealerdirect/phpcodesniffer-composer-installer to 1.0.0
- Updated dependency wp-coding-standards/wpcs to dev-develop
- Updated dependency phpcompatibility/php-compatibility to 9.3.5
- Updated dependency phpcompatibility/phpcompatibility-wp to 2.1.4
- Updated dependency sirbrillig/phpcs-variable-analysis to 2.11.16
- Increased minimum_supported_wp_version to 6.0

### Removed

- Removed dependency automattic/phpcs-neutron-ruleset (but migrated some of the rules to our config)

## [2.1.0] - 2022-07-28

### Changed

- Disable rule WordPress.WP.I18n
- Disable rule WordPress.NamingConventions.PrefixAllGlobals

## [2.0.1] - 2022-03-25

### Fixed

- Disable rule Internal.NoCodeFound for Blade files

## [2.0.0] - 2022-02-08

### Changed

- Allow forward slash (/) in hook names

## [1.0.0] - 2022-01-21

### Changed

- Push major version for better Composer support

## [0.1.0] - 2022-01-20

### Added

- Create package
- Add phpcs and config

[unreleased]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/4.0.1...main
[2.1.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/2.0.1...2.1.0
[2.0.1]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/1.0.0...2.0.0
[1.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/0.1.0...1.0.0
[0.1.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/null...0.1.0
[3.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.0
[3.0.1]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.1
[3.0.2]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.2
[3.0.3]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.3
[3.1.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.1.0
[3.2.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.2.0
[4.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/4.0.0

[4.0.1]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/4.0.1
