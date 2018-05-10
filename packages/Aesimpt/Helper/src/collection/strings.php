<?php

if(! function_exists('excerpt')) {

	/**
	 * Cut the very long string to the specified limit.
	 * 
	 * @param  string $content 
	 * @param  int $limit 
	 * @param  string $after_string 
	 * @return string
	 */
	function excerpt( $content, $limit, $after_string )
	{
		$tail 	= max(0, $limit - 10);
		$trunk 	= substr($content, 0, $tail);
		$trunk .= strrev( preg_replace('~^..+?[\s,:]\b|^...~', $after_string, strrev( substr($content, $tail, $limit - $tail) ) ) );
		return $trunk;
	}
}

if(! function_exists('str_singular_plural')) {

	/**
	 * Returns singular/plural string based upon the number of counts from a subject.
	 * We already have str_plural/str_singular in laravel but those only supports english lang.
	 * 
	 * @param  string $singular 
	 * @param  string $plural 
	 * @param  int $count 
	 * @return string
	 */
	function str_singular_plural( $singular, $plural, $count )
	{
		return ($count > 1) ? $plural : $singular;
	}
}