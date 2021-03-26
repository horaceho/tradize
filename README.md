# Tradize, for Laravel

Convert a simplified Chinese (简体) string to a traditional Chinese (繁體) array of string(s), or inverse.

## Installation

```bash
composer require horaceho/tradize
```
## Usage examples

简 → 繁
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

繁 → 简
``` php
app('tradize')->invert('陳艷麗');

=> [
     "陈艳丽",
   ]
```

## Testing

``` bash
composer test
```

## Credit

[BYVoid/OpenCC](https://github.com/BYVoid/OpenCC) for `data/dictionary/STCharacters.txt` and `data/dictionary/TSCharacters.txt`.

## License

The MIT License (MIT)
