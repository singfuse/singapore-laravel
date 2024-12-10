# singapore-laravel

[![Tests](https://github.com/vinkashq/singapore-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/vinkashq/singapore-laravel/actions/workflows/tests.yml) [![Packagist Version](https://img.shields.io/packagist/v/vinkas/singapore-laravel?logo=packagist&logoColor=000000&label=version&labelColor=d9e0f3&color=f28d1a)](https://packagist.org/packages/vinkas/singapore-laravel)

Laravel package for Singapore's open data API https://data.gov.sg and regions, areas, and subzones data

## Installation

The package [`vinkas/singapore-laravel`](https://packagist.org/packages/vinkas/singapore-laravel) can be installed using composer via Packagist.

```
composer require vinkas/singapore-laravel
```

## Usage

You can simply call the API endpoints by using the `Singapore` facade.

```php
use Vinkas\Singapore\Facade as Singapore;

$response = Singapore::api()->weather()->rainfall();
$data = $response->object()->data;

$stations = $data->stations;
$readings = $data->readings;
```

Also, you can get all the details of Singapore regions, areas, and subzones from the classes below.

```php
Singapore::regions();
Singapore::areas();
Singapore::subzones();
```
