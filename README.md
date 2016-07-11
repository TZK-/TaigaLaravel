# Taiga Laravel

TaigaLaravel is a package used to handle the [TaigaPHP](https://github.com/TZK-/TaigaPHP) library with **Laravel 5** (atm, Laravel 4 is not supported).

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
    TZK\TaigaLaravel\Facade::class,
```

Then, you'll need to publish the configuration to set your auth token (and maybe to change the API url if you host the service yourself):

```sh
    php artisan vendor:publish --provider="TZK\TaigaLaravel\TaigaServiceProvider"
```

This command will generate a config file in **config/taiga.php**.

# Usage

You can access to Taiga thank to the facade:

```php
    $issues = Taiga::issues()->getAll(['project' => $projectId]);

    Taiga::issues()->create(['project' => $projectId, 'subject' => 'My super issue']);
```

# Documentation

There is more informations about the package usage in the [TaigaPHP](https://github.com/TZK-/TaigaPHP) repository...
