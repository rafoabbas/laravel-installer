# Easy Installer for Laravel 
[![Latest Stable Version](https://poser.pugx.org/kubpro/installer/v/stable)](https://packagist.org/packages/kubpro/installer)
[![Total Downloads](https://poser.pugx.org/kubpro/installer/downloads)](https://packagist.org/packages/kubpro/installer)
[![License](https://poser.pugx.org/kubpro/installer/license)](https://packagist.org/packages/kubpro/installer)
[![Monthly Downloads](https://poser.pugx.org/kubpro/installer/d/monthly)](https://packagist.org/packages/kubpro/installer)
[![Daily Downloads](https://poser.pugx.org/kubpro/installer/d/daily)](https://packagist.org/packages/kubpro/installer)
#

## About

* Easy installation like Wordpress or CMS projects
* Wordpress veya CMS projeleri gibi kolay kurulum



## Requirements

* [Laravel 5.4, 5.5, or 5.5+](https://laravel.com/docs/installation)

## Installation

1. From your projects root folder in terminal run:

```bash
    composer require kubpro/installer
```

2. Register the package

* Laravel 5.5 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

```php
	'providers' => [
	    Kubpro\Installer\Providers\InstallerServiceProvider::class,
	];
```

3. Publish the  config file,  and assets files 

```bash
    php artisan vendor:publish
```

## Routes

* `/install`


License
=======

This library is released under the [MIT license](LICENSE).
