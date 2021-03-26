# Tradize, for Laravel

Convert a simplified Chinese string to a traditional Chinese array of string(s)

## Installation

```bash
composer require horaceho/tradize
```

## Usage examples

``` php
app('tradize')->convert('陈艳丽');

=> [
     "陳豔麗",
     "陳艷麗",
   ]

app('tradize')->convert('张小华');

=> [
     "張小華",
   ]
```

## Testing

``` bash
composer test
```

## Credit

[BYVoid/OpenCC](https://github.com/BYVoid/OpenCC) `data/dictionary/STCharacters.txt`

## License

The MIT License (MIT)
