<?php


if (! function_exists('dollar_to_php')) {
    /**
     * Get current user logged in role name
     *
     * @return string
     */
    function dollar_to_php($dollar, $php = 50)
    {
        return number_format($dollar * $php);
    }
}
