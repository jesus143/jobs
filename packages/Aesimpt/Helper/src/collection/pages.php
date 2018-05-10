<?php

if (! function_exists('get_current_tab_name')) {
    /**
     * Get current user logged in role name
     *
     * @return string
     */
    function get_current_tab_name()
    {
        $routeName = optional(request()->route())->getName();

        if('jobseeker-job.search' === $routeName) {
            return 'search';
        } else if ('jobseeker-job.archived' === $routeName) {
            return 'archived';
        } else if ('jobseeker-job.completed' === $routeName) {
            return 'completed';
        } else if ('jobseeker-job.bookmarked' === $routeName) {
            return 'bookmarked';
        } else if ('jobseeker-job.invited' === $routeName) {
            return 'invited';
        } else if ('jobseeker-job.applied' === $routeName) {
            return 'applied';
        } else if ('jobseeker-job.active' === $routeName) {
            return 'active';
        }

    }
}

