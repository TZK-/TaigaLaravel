# Taiga Laravel

TaigaLaravel is a package used to handle the [TaigaPHP](https://github.com/TZK-/TaigaPHP) library with **Laravel 5.x** (Laravel 4 is not supported).

# Installation

Require this package with composer:
```sh
composer install tzk/taiga-laravel
```

***NB*. *You can skip adding the service provider & the facade if you use the Package Auto-discovery (>=Laravel 5.5).***


After updating composer, add the **TaigaServiceProvider** to the providers array in the **config/app.php** file:

```php
TZK\TaigaLaravel\TaigaServiceProvider::class,
```

If you want to use the facade you can also add this to your facades array in **config/app.php**:

```php
'Taiga' => TZK\TaigaLaravel\Facades\Taiga::class,
```

You can publish configuration file if you want to provide extra HTTP header configurations:

```sh
php artisan vendor:publish --provider="TZK\TaigaLaravel\TaigaServiceProvider"
```
> **Note**: It is not necessary if you only want basic configuration, since `api`, `token` and `language` can be set using your **.env** file by adding the following keys.

```
TAIGA_API=https://api.taiga.io/api/v1/
TAIGA_TOKEN=null
TAIGA_LANGUAGE=en
```

# Usage

You can get a new Taiga thanks to the facade:

```php
$taiga = Taiga::newInstance();
$issues = $taiga->issues()->getList(['project' => $projectId]);

// or

// If you do not use Taiga::newInstance(), it will create automatically a new one
// each time you call a method via the facade.
$issues = Taiga::issues()->getList(['project' => $projectId]);
```

Or get an instance from the IoC container

```php
$taiga = app(\TZK\Taiga\Taiga::class)...
```

# Documentation

There is more information about the package in the [TaigaPHP](https://github.com/TZK-/TaigaPHP) repository.

