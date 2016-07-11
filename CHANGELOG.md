# Change log

## [Unreleased]
### Added
### Fixed
### Changed
### Deprecated
### Removed
### Security

## [7.x-1.12.3.1] 2016-07-11
### Added
- `ahoy site config` takes configuration in `config/config.yml` and generates `config/config.php`
- Sample `config/config.yml` added:
```yaml
default:
  hostname: localhost
  https_everywhere: FALSE
acquia:
  subscription: 'professional'
  dev:
    base_url: http://devurl
    core_id: changeme
    derived_key: changeme
  test:
    base_url: http://testurl
    core_id: changeme
    derived_key: changeme
  ra:
    base_url: http://testurl
    core_id: changeme
    derived_key: changeme
  prod:
    base_url: http://produrl
    core_id: changeme
    derived_key: changeme
```
- A symlink has been added from `hooks/common/post-code-deploy/deploy.sh -> drush-env-switch.sh` for backwards compatibility.
### Fixed
### Changed
- `drush/aliases.local.php` now defines an alias for data_starter that's used on cirle ci
- `ahoy site setup` creates a symlink to `/var/www/docroot` if it's run on circle
- `config/config.php` is now part of the data_starter codebase
- `devinci_custom_environment_switch` function has been moved from `settins.php` to `settings.nucivic.php`
- `drush-env-switch.sh` deployment hook script now uses passed in `site` and `env` variables to run deployment.
- `ahoy custom setup/deploy` now call `ahoy ci setup/deploy` oob.
- `ahoy ci deploy` now calls the acquia hook deployment script and the deployment script runs a environment force switch
- `ahoy site update-data-starter` has been modified so that it excludes any changes to `projects/modules/custom` or to `assets/sites/default/settings.php`
- `ahoy site config` will trigger not just the config.php generation but potentially any site specific changes that can be applied via the templates `config/template` do to `config.yml` 
### Deprecated
### Removed
### Security

## [7.x-1.12.3.0] 2016-07-05
### Changed
- Updates dkan to 7.x-1.12.3.0

## [7.x-1.12.2.4] 2016-06-18
### Changed
- `ahoy custom setup` and `ahoy custom deploy` now trigger ci commands
### Fixed
- `ahoy site setup` to fix `find: unknown predicate -exec=cp'`
- Only makes acquia solr available in solr environments

## [7.x-1.12.2.3] 2016-06-17
### Changed
- Updates ahoy tools

## [7.x-1.12.2.2] 2016-06-16
### Added
- Adds dkan health status module to codebase
### Fixed
- Features master array related errors
### Changed
- Better Solr handled logic

## [7.x-1.12.2.1] 2016-06-10
### Added
- Better memcache integration handling in `assets/sites/default/settings.php`

## [7.x-1.12.2.0] 2016-06-10
### Changed
- Updates dkan to 7.x-1.12.2