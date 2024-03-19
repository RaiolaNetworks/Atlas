# This is my package 'Atlas'

<!-- [![Latest Version ont](https://img.shields.io/packagist/v/raiolanetworks/atlas.svg?style=flat-square)](https://packagist.org/packages/raiolanetworks/atlas)

[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/raiolanetworks/atlas/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/raiolanetworks/atlas/actions?query=workflow%3Arun-tests+branch%3Amain)

[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/raiolanetworks/atlas/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/raiolanetworks/atlas/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)

[![Total Downloads](https://img.shields.io/packagist/dt/raiolanetworks/atlas.svg?style=flat-square)](https://packagist.org/packages/raiolanetworks/atlas) -->

With 'Atlas' you will be able to create new tables in the database and fill them with information about countries, states, cities, timezones and more.


## Get to know us

[<img src="https://cdn-assets.raiolanetworks.com/dist/images/logos/logo-blue.svg" width="419px" />](https://raiolanetworks.com)


## Installation

You can install the package via composer:
```bash
composer require raiolanetworks/atlas
```

You can publish the migrations with:

```bash
php artisan vendor:publish --tag="atlas-migrations"
```

Also, you can publish the config file with:

```bash
php artisan vendor:publish --tag="atlas-config"
```

Finally, you can publish the data jsons file with:
```bash
php artisan vendor:publish --tag="atlas-jsons"
```

For run the migrations and fill the tables you should run:
```bash
php artisan atlas:install
```

This will migrate the database tables previously allowed in the configuration file in the `entities` section. (By default, all are allowed)

When the command is executed, it will give the option to select which seeders to run.

The process may take a few minutes as the number of cities is very large.


## Usage

Internally, the package works with Laravel models, which allows you to work with this model as if they were models of your own project.

For example, if you want to get all the countries in Africa:

```php
use Raiolanetworks\Atlas\Models\Country;

class MyClass
{
	public function getAllAfricaCountries(): Collection
	{
		Country::whereRegion('Africa')
			->orderBy('name')
			->get();
		}
}

```


## Changelog

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.


## Credits

- [Martín Gómez](https://github.com/soymgomez)
- [Víctor Escribano](https://github.com/victore13)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
