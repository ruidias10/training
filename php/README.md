# PHP

### Basic Commands
```
  $ composer init
  $ composer install
```

### Basic composer.json
```
{
  "name": "ruidias/basic-composer",
  "description": "Basic usage - Composer",
  "license": "MIT",
  "autoload": {
    "psr-0": {
      "Search": "src/"
    },
    "psr-4": {
      "Ruidias\\BasicComposer\\": "src/"
    }
  },
  "authors": [
    {
      "name": "Rui Dias",
      "email": "rui.dias10@gmail.com"
    }
  ],
  "require": {
    "php": ">=7.2.0"
  }
}

```