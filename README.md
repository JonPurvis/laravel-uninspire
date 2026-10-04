<p align="center">
    <img src="art/banner.png" alt="Laravel Uninspire">
    <p align="center">
        <a href="https://github.com/JonPurvis/laravel-uninspire/actions"><img alt="GitHub Workflow Status (main)" src="https://github.com/JonPurvis/laravel-uninspire/actions/workflows/tests.yml/badge.svg"></a>
        <a href="https://packagist.org/packages/jonpurvis/laravel-uninspire"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/jonpurvis/laravel-uninspire"></a>
        <a href="https://packagist.org/packages/jonpurvis/laravel-uninspire"><img alt="Latest Version" src="https://img.shields.io/packagist/v/jonpurvis/laravel-uninspire"></a>
        <a href="https://packagist.org/packages/jonpurvis/laravel-uninspire"><img alt="License" src="https://img.shields.io/packagist/l/jonpurvis/laravel-uninspire"></a>
    </p>
</p>

# Laravel Uninspire

A humerous alternative to the Laravel Inspire command.

## Introduction

If you're familiar with Laravel, then you should be familiar with `php artisan inspire`.
It's a simple command that outputs an inspirational quote when you run it.

I thought it would be fun to build the opposite of that command. A command
that when ran, spits out a humourous uninspiring quote.

## Installation
To install Laravel Uninspire, you can run the following in your project's root:

```
composer require jonpurvis/laravel-uninspire
```

This package supports PHP 8.3, 8.4, and 8.5, and Laravel 12 and 13.

## Usage

This package adds a new command to your Laravel application, which you can see by running `php artisan`. To
run it, you can run the following command:

```bash
php artisan uninspire
```

## Contributing

Contributions to the package are more than welcome - open an Issue or submit a Pull Request. Please see [CONTRIBUTING.md](CONTRIBUTING.md).

To report a security vulnerability, please see [SECURITY.md](SECURITY.md).
