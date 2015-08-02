[![Build Status](https://travis-ci.org/diego1araujo/titleasy.png?branch=1.0)](https://travis-ci.org/diego1araujo/titleasy)

## Titleasy - Build titles like a charm.

This package is an HTML title generator for Laravel 5.*

## Installation

Edit `composer.json` file to require this package.

    "require": {
		...
		"diego1araujo/titleasy": "1.*"
	}

Next, run the composer update command:

    composer update

Open up `app/config/app.php`

Find the `providers` key and add a new item to the array

```php
Diego1araujo\Titleasy\ServiceProvider::class,
```

Find the `aliases` key and add a new item to the array

```php
'Title'     => Diego1araujo\Titleasy\Facade::class,
```

## Methods

```php
put  - add titles. return: void
last - retrieve last title added. return: string
get  - build the title. return: string. there are 3 params:
		- site name
		- delimiter (default: -)
		- reverse mode (default: false)
```

## Usage

Starting
```php
Title::get('My Website') // Output: My Website
```
Adding a title
```php
Title::put('Users Page')
Title::get('My Website') // Output: My Website - Users Page
```
Changing the delimiter (Set a second parameter on get)
```php
Title::put('Users Page')
Title::get('My Website', '|') // Output: My Website | Users Page
```
Switching to reverse order (Set a third parameter on get as TRUE)
```php
Title::put('Users Page')
Title::get('My Website', '|', TRUE) // Output: Users Page | My Website
```
Multiple titles
```php
Title::put('Users Page')
Title::put('Editing')
// or just:
Title::put('Users Page', 'Editing')
```

Retrieving the last title added
```php
Title::last()
```

NOTE: This job was based on [mywizz's library](https://github.com/mywizz/title-for-laravel). Credits goes to him, also.
