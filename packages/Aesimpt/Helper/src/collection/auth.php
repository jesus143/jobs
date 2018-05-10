<?php

if (! function_exists('auth_user_role_name')) {
    /**
     * Get current user logged in role name
     *
     * @return string
     */
    function auth_user_role_name()
    {
        return strtolower(optional(Auth::user()->roles()->first())->name);
    }
}

if (! function_exists('auth_user_role_jobseeker')) {
    /**
     * Return true if current user logged in has a role of jobseeker
     *
     * @return bool
     */
    function auth_user_role_jobseeker()
    {
       return (strtolower(optional(Auth::user()->roles()->first())->name) === 'jobseeker');
    }
}


if (! function_exists('auth_user_role_employer')) {
    /**
     * Return true if current user logged in has a role of employer
     *
     * @return bool
     */
    function auth_user_role_employer()
    {
        return (strtolower(optional(Auth::user()->roles()->first())->name) === 'employer');
    }
}

if (! function_exists('auth_user_role_administrator')) {
    /**
     * Return true if current user logged in has a role of administrator
     *
     * @return bool
     */
    function auth_user_role_administrator()
    {
        return (strtolower(optional(Auth::user()->roles()->first())->name) === 'administrator');
    }
}


