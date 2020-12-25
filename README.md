<p align="center">
    <a href="https://github.com/yii-extension" target="_blank">
        <img src="https://lh3.googleusercontent.com/ehSTPnXqrkk0M3U-UPCjC0fty9K6lgykK2WOUA2nUHp8gIkRjeTN8z8SABlkvcvR-9PIrboxIvPGujPgWebLQeHHgX7yLUoxFSduiZrTog6WoZLiAvqcTR1QTPVRmns2tYjACpp7EQ=w2400" height="100px">
    </a>
    <h1 align="center">Parameter settings for Yii.</h1>
    <br>
</p>

[![Total Downloads](https://poser.pugx.org/yii-extension/parameter-service/downloads.png)](https://packagist.org/packages/yii-extension/parameter-service)
[![Build Status](https://github.com/yii-extension/parameter-service/workflows/build/badge.svg)](https://github.com/yii-extension/parameter-service/actions?query=workflow%3Abuild)
[![codecov](https://codecov.io/gh/yii-extension/parameter-service/branch/master/graph/badge.svg?token=B9AUC48V2M)](https://codecov.io/gh/yii-extension/parameter-service)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https://badge-api.stryker-mutator.io/github.com/yii-extension/parameter-service/master)](https://dashboard.stryker-mutator.io/reports/github.com/yii-extension/parameter-service/master)
[![static analysis](https://github.com/yii-extension/parameter-service/workflows/static%20analysis/badge.svg)](https://github.com/yii-extension/parameter-service/actions?query=workflow%3A%22static+analysis%22)


## Installation

```shell
composer require yii-extension/parameter-service
```

## Usages:
You can inject parameter-service into the controller or action, and automatically all dependencies are resolved by autowired in di-container.

```php
$parameter = new Parameter(['app' => ['name' => 'Demo application.']]);
$name = $parameter->get('app.name');
```

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework. To run it:

```shell
./vendor/bin/infection
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```

### License

The parameter-service for Yii Packages is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Extension](https://github.com/yii-extension).
