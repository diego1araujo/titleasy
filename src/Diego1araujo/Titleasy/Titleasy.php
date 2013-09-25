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
	 * @param  string	$title
	 * @return void
	 */
	public static function put($title = NULL)
	{
		if ( ! $title OR strlen(trim($title)) === 0) return;

		static::$titles[] = trim(strip_tags($title));
	}

	/**
	 * Returns last added title
	 *
	 * @return string
	 */
	public static function last()
	{
		return static::$titles[count(static::$titles) - 1];
	}

	/**
	 * Returns generated title for display
	 *
	 * @param string    $default_title
	 * @param string    $delimiter
	 * @param bool      $reverse
	 * @return string
	 */
	public static function get($default_title = NULL, $delimiter, $reverse = FALSE)
	{
		static $default_added = FALSE;

		if ($default_added === FALSE)
		{
			if ( ! is_null($default_title))
			{
				array_unshift(static::$titles, $default_title);
			}

			$default_added = TRUE;
		}

		$delimiter = empty($delimiter) ? '::' : $delimiter;
		return implode(' ' . $delimiter . ' ', $reverse === TRUE ? array_reverse(static::$titles) : static::$titles);
	}

}