<?php

if(! function_exists('is_true')) 
{
	/**
	 * Returns the specified $true/$false value if the given $bool value is true/false.
	 * 
	 * @param  bool $bool 
	 * @param  mixed|bool $true 
	 * @param  mixed|bool $false 
	 * @param  bool $echo 
	 * @return mixed
	 */
	function is_true( $bool, $true = true, $false = false )
	{
		return $bool? $true : $false;
	}
}

if(! function_exists('is_match') )
{
	/**
	 * Returns the specified $true/$false value if the given $var1 and $var2 matched.
	 * 
	 * @param  mixed $var1 
	 * @param  mixed $var2 
	 * @param  mixed|bool $true 
	 * @param  mixed|bool $false 
	 * @return mixed
	 */
	function is_match( $var1, $var2, $true = true, $false = false )
	{
		return ($var1 === $var2) ? $true : $false;
	}
}