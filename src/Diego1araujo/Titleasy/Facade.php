<?php namespace Diego1araujo\Titleasy;

class Facade extends \Illuminate\Support\Facades\Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'titleasy'; }

}
