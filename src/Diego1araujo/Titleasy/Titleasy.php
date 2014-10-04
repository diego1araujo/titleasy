<?php namespace Diego1araujo\Titleasy;
/**
 * Titleasy
 *
 * Build titles like a charm
 *
 * Package by Diego Araujo <diego77araujo@gmail.com>
 * Based on Yunseok Kim's HTML Title Generator
 */

class Titleasy {

	/**
	 * The titles
	 *
	 * @var array
	 */
	protected static $titles = array();

	/**
	 * Add title
	 *
	 * @param string $title
	 * @return void
	 */
	public static function put()
	{
		$args = func_get_args();

		foreach($args as $arg)
		{
			if ( ! empty($arg))
				static::$titles[] = trim(strip_tags($arg));
		}
	}

	/**
	 * Returns last added title
	 *
	 * @return string
	 */
	public static function last()
	{
		return end(static::$titles);
	}

	/**
	 * Returns generated title for display
	 *
	 * @param  string  $default_title
	 * @param  string  $delimiter
	 * @param  bool    $reverse
	 * @return string
	 */
	public static function get($default_title = NULL, $delimiter = NULL, $reverse = FALSE)
	{
		if ( $default_title)
			array_unshift(static::$titles, $default_title);

		if ( ! $delimiter) $delimiter = '-';

		return implode(' ' . $delimiter . ' ', $reverse === TRUE ? array_reverse(static::$titles) : static::$titles);
	}

}
