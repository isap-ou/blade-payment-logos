<p align="center">
    <img src="https://static.isap.me/blade-payment-logos.png" width="1280" title="Social Card Blade Payment Logos">
</p>

# Blade Payment Logos

<a href="https://packagist.org/packages/isapp/blade-payment-logos">
    <img src="https://img.shields.io/packagist/v/isapp/blade-payment-logos" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/isapp/blade-payment-logos">
    <img src="https://img.shields.io/packagist/dt/isapp/blade-payment-logos" alt="Total Downloads">
</a>

A package to easily make use of [Payment Logos](https://github.com/datatrans/payment-logos) in your Laravel Blade views.

For a full list of available logos see [the SVG directory](resources/svg).

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require isapp/blade-payment-logos
```

## Updating

Please refer to [`the upgrade guide`](https://github.com/driesvints/blade-icons?tab=readme-ov-file#upgrading) when updating the library.

## Blade Icons

Blade Payment Logos uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Caching Icons

It's a good idea to add the `icons:cache` command as part of your deployment pipeline and always cache icons in production. This will significantly improve performance of the application. Refer [Caching](https://github.com/driesvints/blade-icons?tab=readme-ov-file#caching) section for details.

## Configuration

Blade Payment Logos also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-carbon-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-payment-logos-config
```

## Usage

Blade Payment Logos uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/driesvints/blade-icons?tab=readme-ov-file#usage) for usage functionality.

## Contributing

Please, submit bugs or feature requests via the [Github issues](https://github.com/isap-ou/blade-payment-logos/issues).

Pull requests are welcomed!

Thanks!

## License

This project is open-sourced software licensed under the [MIT License](https://opensource.org/licenses/MIT).

You are free to use, modify, and distribute it in your projects, as long as you comply with the terms of the license.

---

Maintained by [ISAPP](https://isapp.be) and [ISAP OÜ](https://isap.me).  
Check out our software development services at [isap.me](https://isap.me).
