# PHP

### Basic Commands
```
  $ composer init
  $ composer install
  $ php -S localhost:8111
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

### Xdebug e PHPUnit
```
  $ composer require --dev phpunit/phpunit ^9
  $ ./vendor/bin/phpunit --version
  $ phpunit --generate-configuration

  $ ./vendor/bin/phpunit tests/ --colors=always
  $ ./vendor/bin/phpunit tests/ --colors=always --testdox-text=report-test.txt
  $ XDEBUG_MODE=coverage vendor/bin/phpunit tests/ --colors=always --testdox-text=report-test.txt --coverage-html=_report

  $ XDEBUG_CONFIG=profile_output_name=cachegrind.out.%R XDEBUG_MODE=profile php -S localhost:8111
  $ ls -l /tmp/cachegrind.out.* #KCachegrind
```

### PHP_CodeSniffer
```
  $ composer require --dev "squizlabs/php_codesniffer=*"
  $ ./vendor/bin/phpcs src/
  $ ./vendor/bin/phpcs src/ --standard=PSR12

  $ ./vendor/bin/phpcbf -i  
  $ ./vendor/bin/phpcbf src/ --standard=PSR12
```

### Laravel
```
  $ composer create-project laravel/laravel example-app
  $ php artisan serve // http://localhost:8000
  $ php artisan config:clear 
  $ php artisan config:cache 
  $ php artisan make:controller MyUser
  $ php artisan make:model MyUser
```