#Spanish DNI / NIF / CIF Validator for Laravel

### Installation

You can install the package via composer:

```bash
composer require disitec/laravel-dni-validator
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in `config/app.php` file:

```php
'providers' => [
    // ...
    Disitec\DniValidator\DniValidatorServiceProvider::class,
];
```
