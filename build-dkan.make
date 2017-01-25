api = 2
core = 7.x

includes[core] = dkan/drupal-org-core.make

; Profile

projects[dkan][type] = profile
projects[dkan][download][type] = git
projects[dkan][download][url] = https://github.com/NuCivic/dkan.git
projects[dkan][download][branch] = workflow-test-cleanup

; Un-comment if diff is not empty.
;projects[dkan][patch][1] = https://github.com/NuCivic/dkan/compare/7.x-1.12.13...release-1-12.diff

