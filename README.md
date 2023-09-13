# This is my package laravel-primary-key-uuid

[![Latest Version on Packagist](https://img.shields.io/packagist/v/andach/laravel-primary-key-uuid.svg?style=flat-square)](https://packagist.org/packages/andach/laravel-primary-key-uuid)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/andach/laravel-primary-key-uuid/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/andach/laravel-primary-key-uuid/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/andach/laravel-primary-key-uuid/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/andach/laravel-primary-key-uuid/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/andach/laravel-primary-key-uuid.svg?style=flat-square)](https://packagist.org/packages/andach/laravel-primary-key-uuid)

This is an incredibly simple package to add a simple trait for Laravel models where the primary key is a UUID.

## Installation

You can install the package via composer:

```bash
composer require andach/laravel-primary-key-uuid
```

There are no migrations, views or config file. 

## Usage

```php
<?php

namespace App\Models;

use Andach\LaravelPrimaryKeyUuid\Traits\PrimaryKeyUUID;

class MyModel extends Model
{
    use PrimaryKeyUUID;
    
    // ...
}

```

## Testing

```bash
composer test
```

## Credits

- [Andreas Christodolou](https://github.com/andach-andreas)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
