# Titleasy - Build titles like a charm.

This package is a HTML title generator for Laravel 4.

## Installation

Edit your project's `composer.json` file to require `diego1araujo/titleasy`.

    "require": {
		"laravel/framework": "4.0.*",
		"diego1araujo/titleasy": "dev-master"
	}

Next step, update Composer from the CLI:

    composer update

Find the `providers` key in `app/config/app.php` and add a new item to the array

	'providers' => array(
        // ...
		'Diego1araujo\Titleasy\TitleasyServiceProvider',
	)
	
Find the `aliases` key in `app/config/app.php` and add a new item to the array

	'aliases' => array(
        // ...
		'Title' => 'Diego1araujo\Titleasy\Facades\Titleasy',
	)

## Usage Example

Starting:

	Title::get('My Website') // Output: My Website

Adding a title:

	Title::put('Users Page')
	Title::get('My Website') // Output: My Website :: Users Page
	
Changing the delimiter: (Set a second parameter on Get)

	Title::put('Users Page')
	Title::get('My Website', '-') // Output: My Website - Users Page

Switching to reverse order: (Set a third parameter on Get as TRUE)

	Title::put('Users Page')
	Title::get('My Website', '-', TRUE) // Output: Users Page - My Website

Retrieving the last title added

	Title::last()

NOTE: This package was forked from [mywizz's title](https://github.com/mywizz/title-for-laravel). All credits belongs to Yunseok Kim.
