# Tradize

[![Latest Version on Packagist](https://img.shields.io/packagist/v/horaceho/tradize.svg?style=flat-square)](https://packagist.org/packages/horaceho/tradize)
[![Build Status](https://img.shields.io/travis/horaceho/tradize/master.svg?style=flat-square)](https://travis-ci.org/horaceho/tradize)
[![Quality Score](https://img.shields.io/scrutinizer/g/horaceho/tradize.svg?style=flat-square)](https://scrutinizer-ci.com/g/horaceho/tradize)
[![Total Downloads](https://img.shields.io/packagist/dt/horaceho/tradize.svg?style=flat-square)](https://packagist.org/packages/horaceho/tradize)

Convert a simplified Chinese string to a traditional Chinese array

## Installation

```bash
composer require horaceho/tradize
```

## Usage

``` php
app('tradize')->convert('陈艳丽');

=> [
     "陳豔麗",
     "陳艷麗",
   ]
```

### Testing

``` bash
composer test
```

## License

The MIT License (MIT)
