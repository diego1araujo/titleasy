[![Build Status](https://travis-ci.org/diego1araujo/titleasy.png?branch=master)](https://travis-ci.org/diego1araujo/titleasy)
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/diego1araujo/titleasy/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

## Titleasy - Build titles like a charm.

This package is a HTML title generator for Laravel 4.

## Installation

Edit `composer.json` file to require this package.

    "require": {
		...
		"diego1araujo/titleasy": "dev-master"
	}

Next, run the composer update command:

    composer update

Open up `app/config/app.php`

Find the `providers` key and add a new item to the array

	'Diego1araujo\Titleasy\ServiceProvider',
	
Find the `aliases` key and add a new item to the array

	'Title' => 'Diego1araujo\Titleasy\Facade',

## Usage

Starting
```php
Title::get('My Website') // Output: My Website
```
Adding a title
```php
Title::put('Users Page')
Title::get('My Website') // Output: My Website :: Users Page
```	
Changing the delimiter (Set a second parameter on get())
```php
Title::put('Users Page')
Title::get('My Website', '-') // Output: My Website - Users Page
```
Switching to reverse order (Set the third parameter on get() as TRUE)
```php
Title::put('Users Page')
Title::get('My Website', '-', TRUE) // Output: Users Page - My Website
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
