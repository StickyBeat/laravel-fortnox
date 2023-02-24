# Fortnox API Client for Laravel

Simplifies integration with the Fortnox API.

_Please notice! This package does not yet support all available resources in the Fortnox API_

## Requirements

-   Laravel 6 or higher
-   PHP 8.0 or higher
-   Valid client id (from Fortnox)
-   Valid client secret (from Fortnox)
-   Valid refresh token (from Fortnox)

## Installation

This is a fork from KFoobar/laravel-fortnox:main

You can install the package via Composer:

`composer require StickyBeat/laravel-fortnox `

## Settings for .env

```
FORTNOX_CLIENT_ID=
FORTNOX_CLIENT_SECRET=
FORTNOX_REFRESH_TOKEN=
```

## Fortnox authorization

In order to use the Fortnox API, you need a valid refresh token.
To get a refresh token, you need to grant access to the integration via Fortnox's OAuth2
authorization code flow. In that process, you are assigned an _authorization code_
that you can use to exchange for a pair of token:

The **access token** - which is used to authenticate all API request - is only valid
for 1 hour and needs to be refreshed using a refresh token. This package handles
that process as long you have a valid refresh token.

The **refresh token** - which is used to renew the access token - is valid for 30 days.
If it expires, you need to redo the OAuth2 authorization flow.

Every time you renew you access token, you will be assigned a new refresh token that
is valid for another 30 days. It is therefore important that you regularly renew
the tokens so that the refresh token does not expire.

You can renew your tokens with the following command:

```
php artisan fortnox:refresh
```

_Both the access token and the refresh token are stored in your application's cache.
Keep this in mind when you purge the cache or changes cache driver._

_UPDATE: This is changed to store tokens in Redis instead. If you are using predis client, make sure you enable `Redis` facade in config/app.php_

https://laravel.com/docs/9.x/redis

## Instructions

Coming soon...

## Contributing

Contributions are welcome!

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
