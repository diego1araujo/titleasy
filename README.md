[![Build Status](https://travis-ci.org/diego1araujo/titleasy.png?branch=master)](https://travis-ci.org/diego1araujo/titleasy)

## Titleasy - Build titles like a charm.

This package is an HTML title generator for Laravel 4.

### For Laravel 5, use the [1.0 branch](https://github.com/diego1araujo/titleasy/tree/1.0)!

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

```php
'Diego1araujo\Titleasy\ServiceProvider',
```

Find the `aliases` key and add a new item to the array

```php
'Title' => 'Diego1araujo\Titleasy\Facade',
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

## Out of Laravel

Require via composer

	composer require diego1araujo/titleasy

When asked for a version, choose:

	dev-master

Create a index.php like:

```php
<?php
require_once 'vendor/autoload.php';

use Diego1araujo\Titleasy\Titleasy as Title;

Title::put('Users Page');
echo Title::get('My Website');
```

NOTE: This job was based on [mywizz's library](https://github.com/mywizz/title-for-laravel). Credits goes to him, also.
