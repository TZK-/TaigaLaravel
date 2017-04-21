# Taiga Laravel

TaigaLaravel is a package used to handle the [TaigaPHP](https://github.com/TZK-/TaigaPHP) library with **Laravel 5.x** (atm, Laravel 4 is not supported).

# Installation

Require this package with composer:
```sh
composer install tzk/taiga-laravel
```

After updating composer, add the **TaigaServiceProvider** to the providers array in the **config/app.php** file:

```php
TZK\TaigaLaravel\TaigaServiceProvider::class,
```

If you want to use the facade you can also add this to your facades array in **config/app.php**:

```php
'Taiga' => TZK\TaigaLaravel\Facades\Taiga::class,
```

You can publish configuration file:

```sh
php artisan vendor:publish --provider="TZK\TaigaLaravel\TaigaServiceProvider"
```
> **Note**: It is not necessary, since `api`, `token` and `language` can be set using **.env** file

Add following keys to your **.env.example** file (and if production **.env** file as well)

```
TAIGA_API=https://api.taiga.io/api/v1/
TAIGA_TOKEN=null
TAIGA_LANGUAGE=en
```

# Usage

You can access to Taiga thank to the facade:

```php
$issues = Taiga::issues()->getList(['project' => $projectId]);

Taiga::issues()->create(['project' => $projectId, 'subject' => 'My super issue']);
```

Or resolve singleton using `$taiga = resolve(\TZK\Taiga\Taiga::class)`

```php
$taiga = resolve(\TZK\Taiga\Taiga::class)->issues()...
```

# Documentation

There is more information about the package in the [TaigaPHP](https://github.com/TZK-/TaigaPHP) repository.
