# <img src="https://seeklogo.com/images/L/laravel-logo-9B01588B1F-seeklogo.com.png" width="24px"> Laravel Packages 📦

[![Build Status](https://travis-ci.org/bukankalengkaleng/laravel-packages.svg?branch=master)](https://travis-ci.org/bukankalengkaleng/laravel-packages)

> Readme ini ditulis dalam bahasa Inggris. [Versi bahasa Indonesianya ada disini](https://github.com/bukankalengkaleng/laravel-packages/blob/master/README.md).

## Description

A collection of (personal choice) Laravel must-have packages.

## Motivation

Just so I (and hopefully you guys also) doesn't need to pull every packages you like one-by-one, over and over again.

## Installation

1. Install fresh Laravel project
1. Add this code in `config/database.php`, on `connections` section:
    ```php
    'system' => [
        'driver' => 'mysql',
        'host' => env('TENANCY_HOST', '127.0.0.1'),
        'port' => env('TENANCY_PORT', '3306'),
        'database' => env('TENANCY_DATABASE', 'tenancy'),
        'username' => env('TENANCY_USERNAME', 'tenancy'),
        'password' => env('TENANCY_PASSWORD', ''),
        'unix_socket' => env('DB_SOCKET', ''),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => null,
    ]
    ```
    > That configuration is required by **Multi-Tenant** package. See its official docs [here](https://laravel-tenancy.com/docs/hyn/5.3/installation).
1. Setup database (also configure the `.env` file)
1. Run this command:
    ```
    composer require bukankalengkaleng/laravel-packages
    ```
1. Run this command:
    ```
    php artisan laravel-packages:install
    ```

## Packages List

Here is the list of all packages that comes with this package (A-Z):

### Main packages

1. [Algolia's PHP SDK](https://github.com/algolia/algoliasearch-client-php)
1. [AWS' Laravel PHP SDK](https://github.com/aws/aws-sdk-php-laravel)
1. [Barryvdh's Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
1. [BeyondCode's Dusk Dashboard](https://github.com/beyondcode/dusk-dashboard)
1. [BeyondCode's Laravel Vouchers](https://github.com/beyondcode/laravel-vouchers)
1. [BeyondCode's Laravel Websockets](https://docs.beyondco.de/laravel-websockets/)
1. [Hyn's Multi-Tenant](https://github.com/hyn/multi-tenant)
1. [Laravel Cashier](https://laravel.com/docs/5.7/billing)
1. [Laravel Dusk](https://laravel.com/docs/5.7/dusk)
1. [Laravel Horizon](https://laravel.com/docs/5.7/horizon)
1. [Laravel Passport](https://laravel.com/docs/5.7/passport)
1. [Laravel Scout](https://laravel.com/docs/5.7/scout)
1. [Laravel Socialite](https://laravel.com/docs/5.7/socialite)
1. [Laravel Telescope](https://laravel.com/docs/5.7/telescope)
1. [League's Flysystem AWS S3](https://github.com/thephpleague/flysystem-aws-s3-v3)
1. [Maatwebsite's Laravel Excel](https://github.com/maatwebsite/Laravel-Excel)
1. [nWidart's Laravel Modules](https://github.com/nWidart/laravel-modules)
1. [Owen-IT's Laravel Auditing](https://github.com/owen-it/laravel-auditing)
1. [Spatie's Array-to-XML](https://github.com/spatie/array-to-xml)
1. [Spatie's Browsershot](https://github.com/spatie/browsershot)
1. [Spatie's Calendar Links](https://github.com/spatie/calendar-links)
1. [Spatie's Color](https://github.com/spatie/color)
1. [Spatie's DNS](https://github.com/spatie/dns)
1. [Spatie's Dropbox API](https://github.com/spatie/dropbox-api)
1. [Spatie's Eloquent Sortable](https://github.com/spatie/eloquent-sortable)
1. [Spatie's Emoji](https://github.com/spatie/emoji)
1. [Spatie's Flysystem Dropbox](https://github.com/spatie/flysystem-dropbox)
1. [Spatie's Geocoder](https://github.com/spatie/geocoder)
1. [Spatie's Image](https://github.com/spatie/image)
1. [Spatie's Laravel Activitylog](https://github.com/spatie/laravel-activitylog)
1. [Spatie's Laravel Analytics](https://github.com/spatie/laravel-analytics)
1. [Spatie's Laravel Artisan DD](https://github.com/spatie/laravel-artisan-dd)
1. [Spatie's Laravel Backup](https://github.com/spatie/laravel-backup)
1. [Spatie's Laravel Blade-Javascript](https://github.com/spatie/laravel-blade-javascript)
1. [Spatie's Laravel Blade X](https://github.com/spatie/laravel-blade-x)
1. [Spatie's Laravel Blink](https://github.com/spatie/laravel-blink)
1. [Spatie's Laravel Collection Macros](https://github.com/spatie/laravel-collection-macros)
1. [Spatie's Laravel Cookie Consent](https://github.com/spatie/laravel-cookie-consent)
1. [Spatie's Laravel CORS](https://github.com/spatie/laravel-cors)
1. [Spatie's Laravel CSP](https://github.com/spatie/laravel-csp)
1. [Spatie's Laravel DB Snapshots](https://github.com/spatie/laravel-db-snapshots)
1. [Spatie's Laravel Demo Mode](https://github.com/spatie/laravel-demo-mode)
1. [Spatie's Laravel Directory CleanUp](https://github.com/spatie/laravel-directory-cleanup)
1. [Spatie's Laravel Event Projector](https://github.com/spatie/laravel-event-projector)
1. [Spatie's Laravel Feed](https://github.com/spatie/laravel-feed)
1. [Spatie's Laravel Fractal](https://github.com/spatie/laravel-fractal)
1. [Spatie's Laravel Google Calendar](https://github.com/spatie/laravel-google-calendar)
1. [Spatie's Laravel Google Tag Manager](https://github.com/spatie/laravel-googletagmanager)
1. [Spatie's Laravel Honeypot](https://github.com/spatie/laravel-honeypot)
1. [Spatie's Laravel HTML](https://github.com/spatie/laravel-html)
1. [Spatie's Laravel HTTP Logger](https://github.com/spatie/laravel-http-logger)
1. [Spatie's Laravel Image Optimizer](https://github.com/spatie/laravel-image-optimizer)
1. [Spatie's Laravel JSON API Paginate](https://github.com/spatie/laravel-json-api-paginate)
1. [Spatie's Laravel Menu](https://github.com/spatie/laravel-menu)
1. [Spatie's Laravel Medialibrary](https://github.com/spatie/laravel-medialibrary)
1. [Spatie's Laravel Missing Page Redirector](https://github.com/spatie/laravel-missing-page-redirector)
1. [Spatie's Laravel Model CleanUp](https://github.com/spatie/laravel-model-cleanup)
1. [Spatie's Laravel Model Status](https://github.com/spatie/laravel-model-status)
1. [Spatie's Laravel Newsletter](https://github.com/spatie/laravel-newsletter)
1. [Spatie's Laravel Permission](https://github.com/spatie/laravel-permission)
1. [Spatie's Laravel Query Builder](https://github.com/spatie/laravel-query-builder)
1. [Spatie's Laravel Response Cache](https://github.com/spatie/laravel-responsecache)
1. [Spatie's Laravel Referer](https://github.com/spatie/laravel-referer)
1. [Spatie's Laravel Robots Middleware](https://github.com/spatie/laravel-robots-middleware)
1. [Spatie's Laravel Robots-txt](https://github.com/spatie/robots-txt)
1. [Spatie's Laravel Schemaless Attributes](https://github.com/spatie/laravel-schemaless-attributes)
1. [Spatie's Laravel Searchable](https://github.com/spatie/laravel-searchable)
1. [Spatie's Laravel Server Monitor](https://github.com/spatie/laravel-server-monitor)
1. [Spatie's Laravel Server-Side Rendering](https://github.com/spatie/laravel-server-side-rendering)
1. [Spatie's Laravel Slack Slash Command](https://github.com/spatie/laravel-slack-slash-command)
1. [Spatie's Laravel Sluggable](https://github.com/spatie/laravel-sluggable)
1. [Spatie's Laravel Stripe Webhooks](https://github.com/spatie/laravel-stripe-webhooks)
1. [Spatie's Laravel Tags](https://github.com/spatie/laravel-tags)
1. [Spatie's Laravel Tail](https://github.com/spatie/laravel-tail)
1. [Spatie's Laravel Translatable](https://github.com/spatie/laravel-translatable)
1. [Spatie's Laravel Translation Loader](https://github.com/spatie/laravel-translation-loader)
1. [Spatie's Laravel Twitter Streaming API](https://github.com/spatie/twitter-streaming-api)
1. [Spatie's Laravel Uptime Monitor](https://github.com/spatie/laravel-uptime-monitor)
1. [Spatie's Laravel Varnish](https://github.com/spatie/laravel-varnish)
1. [Spatie's Laravel View-Components](https://github.com/spatie/laravel-view-components)
1. [Spatie's Laravel View-Models](https://github.com/spatie/laravel-view-models)
1. [Spatie's Macroable](https://github.com/spatie/macroable)
1. [Spatie's Once](https://github.com/spatie/once)
1. [Spatie's Opening Hours](https://github.com/spatie/opening-hours)
1. [Spatie's Packagist API](https://github.com/spatie/packagist-api)
1. [Spatie's PDF-to-Image](https://github.com/spatie/pdf-to-image)
1. [Spatie's PDF-to-Text](https://github.com/spatie/pdf-to-text)
1. [Spatie's Regex](https://github.com/spatie/regex)
1. [Spatie's SSL Certificate](https://github.com/spatie/ssl-certificate)
1. [Spatie's Temporary Directory](https://github.com/spatie/temporary-directory)
1. [Spatie's URL](https://github.com/spatie/url)
1. [Spatie's URL Signer](https://github.com/spatie/url-signer)
1. [Spatie's Value Store](https://github.com/spatie/valuestore)
1. [Yajra's DataTables](https://github.com/yajra/laravel-datatables)

### Main package's plugins / libraries

1. [AWS' PHP SNS Message Validator](https://github.com/aws/aws-php-sns-message-validator)
1. [Barryvdh's Laravel Snappy](https://github.com/barryvdh/laravel-snappy)
1. [Doctrine's DBAL](https://www.doctrine-project.org/projects/dbal.html)
1. [Yajra's DataTables Editor](https://github.com/yajra/laravel-datatables-editor)
1. [Yajra's DataTables HTML](https://github.com/yajra/laravel-datatables-html)
1. [Yajra's DataTables Button](https://github.com/yajra/laravel-datatables-buttons)
1. [Yajra's DataTables Fractal](https://github.com/yajra/laravel-datatables-fractal)

## Roadmap

How about the other packages that are not listed above? Plese see [Roadmap](https://github.com/bukankalengkaleng/laravel-packages/blob/master/ROADMAP.md) for more information.

## Contributing

Am I missing other good packages?

1. Send PR
1. Please do not take it personal if your PR got rejected

## Changelog

Notable changes are documented in [Changelog](https://github.com/bukankalengkaleng/laravel-packages/blob/master/CHANGELOG.md) file.

## License

The MIT License (MIT). Please see [License](https://github.com/bukankalengkaleng/laravel-packages/blob/master/LICENSE.md) file for more information.
