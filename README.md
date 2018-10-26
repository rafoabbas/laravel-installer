# installer

## Requirements

* [Laravel 5.4, 5.5, or 5.5+](https://laravel.com/docs/installation)

## Installation

1. From your projects root folder in terminal run:

```bash
    composer require rachidlaasri/laravel-installer
```

2. Register the package

* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

```php
	'providers' => [
	    Kubpro\Installer\Providers\InstallerServiceProvider::class,
	];
```

3. Publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
    php artisan vendor:publish
```

## Routes

* `/install`
