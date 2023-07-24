# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

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


[unreleased]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/3.0.2...main
[2.1.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/2.0.1...2.1.0
[2.0.1]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/1.0.0...2.0.0
[1.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/0.1.0...1.0.0
[0.1.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/compare/null...0.1.0

[3.0.0]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.0

[3.0.1]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.1

[3.0.2]: https://github.com/airfleet/airfleet-wordpress-dev-php-tools/releases/tag/3.0.2
