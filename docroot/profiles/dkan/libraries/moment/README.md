[![NPM version][npm-version-image]][npm-url] [![NPM downloads][npm-downloads-image]][npm-url] [![MIT License][license-image]][license-url] [![Build Status][travis-image]][travis-url]

A lightweight JavaScript date library for parsing, validating, manipulating, and formatting dates.

- - - - - - -

**Important notice**: Moment is undergoing major refactoring for version
**2.10**, that would result in ES6 code that is transpiled to ES5 for
different environments: node, browser global, AMD, various build/packaging
systems.

You might be required to rewrite your pull request on top once we merge it in.

- - - - - - -

## [Documentation](http://momentjs.com/docs/)

## Upgrading to 2.0.0

There are a number of small backwards incompatible changes with version 2.0.0. [See the full descriptions here](https://gist.github.com/timrwood/e72f2eef320ed9e37c51#backwards-incompatible-changes)

 * Changed language ordinal method to return the number + ordinal instead of just the ordinal.

 * Changed two digit year parsing cutoff to match strptime.

 * Removed `moment#sod` and `moment#eod` in favor of `moment#startOf` and `moment#endOf`.

 * Removed `moment.humanizeDuration()` in favor of `moment.duration().humanize()`.

 * Removed the lang data objects from the top level namespace.

 * Duplicate `Date` passed to `moment()` instead of referencing it.

## [Changelog](https://github.com/moment/moment/blob/develop/CHANGELOG.md)

## [Contributing](https://github.com/moment/moment/blob/develop/CONTRIBUTING.md)

## License

Moment.js is freely distributable under the terms of the [MIT license](https://github.com/moment/moment/blob/develop/LICENSE).

[license-image]: http://img.shields.io/badge/license-MIT-blue.svg?style=flat
[license-url]: LICENSE

[npm-url]: https://npmjs.org/package/moment
[npm-version-image]: http://img.shields.io/npm/v/moment.svg?style=flat
[npm-downloads-image]: http://img.shields.io/npm/dm/moment.svg?style=flat

[travis-url]: http://travis-ci.org/moment/moment
[travis-image]: http://img.shields.io/travis/moment/moment/develop.svg?style=flat