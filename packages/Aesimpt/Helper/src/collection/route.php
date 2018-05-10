<?php

if (! function_exists('is_route')) {

	/**
	 * Check if current url's route name is equal to the specified route name.
	 * 
	 * @author Paul J
	 * @since  1.0.0
	 * @param  'string' $routeName 
	 * @param  mixed|null $true   // returns the specified true value if argument is true.
	 * @param  mixed|null $false  // returns the specified false value if argument is false.
	 * @return mixed
	 */
	function is_route( $routeName, $true = null, $false = null )
	{
		if( optional(request()->route())->getName() === $routeName ) {

			return $true ?? true;
		}

		return $false ?? false;
	}
}

if(! function_exists('write_if_route')) {

	/**
	 * Return a specified text if the current route is equals to the specified route.
	 * 
	 * @param  array $args (key = route name | value = text)
	 * @return mixed
	 * 
	 * Sample usage: 
	  	write_if_route([
            'route_name_1'  => 'This is route 1',
            'route_name_2'  => 'And this is route 2',
            'route_name_3'  => 'Finally route 3',
        ])
	 */
	function write_if_route( $args )
	{
		foreach ($args as $route => $text) {
			if( is_route($route, $text, '') ) {
				return $text;
				break;
			}
		}
	}
}