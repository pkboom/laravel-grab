# Very short description of the package

[![Latest Stable Version](https://poser.pugx.org/pkboom/laravel-grab/v)](//packagist.org/packages/pkboom/laravel-grab)
[![Total Downloads](https://poser.pugx.org/pkboom/laravel-grab/downloads)](//packagist.org/packages/pkboom/laravel-grab)

This is where your description should go. Try and limit it to a paragraph or two.
<img src="/images/demo.png" width="800"  title="demo">

## Installation

You can install the package via composer:

```bash
composer require pkboom/grab
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Pkboom\Grab\GrabServiceProvider" --tag="laravel-grab-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Pkboom\Grab\GrabServiceProvider" --tag="laravel-grab-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-grab = new Pkboom\Grab();
echo $laravel-grab->echoPhrase('Hello, pkboom!');
```

## Testing

```bash
composer test
```
