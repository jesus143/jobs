<?php

    if (! function_exists('is_active')) {
        /**
         * Return active class if current tab is visited
         *
         * @param array $routeNames
         * @return null|string
         */
        function is_active($routeNames = array())
        {
            if (in_array(optional(request()->route())->getName(), $routeNames)) {
                return 'active';
            }

            /**
             * Only trigger this else if condition if the page visited at overview or chatbox
             * so sidebar is still getting highlighted
             */
            else if (
                (in_array(session('from_tab_name'), $routeNames)) and
                (in_array(optional(request()->route())->getName(), ['jobseeker-job.overview', 'jobseeker-job.chatbox']))
            ) {
                return 'active';
            }

            return null;
        }
    }

    if (! function_exists('is_step_completed')) {
        /**
         * Return step-completed if visited tab next to the tab
         *
         * @param $myRouteName
         * @param array $routeSequence
         * @return string
         */
        function is_step_completed($myRouteName, $routeSequence = array())
        {

//            print 'my tab ' . $myRouteName;
//            print " | ";
//            print " current tab " . request()->route()->getName();
//            print " | array tab ";
//            print_r($routeSequence);
//
//

            $currentRoutePos = array_search(request()->route()->getName(), $routeSequence);
            $myRoutePos = array_search($myRouteName, $routeSequence);

//
//            print " my route pos " . $myRoutePos;
//            print " current route pos " . $currentRoutePos;

            if (empty($myRoutePos) and !empty($currentRoutePos)) {
                return 'step-complete';
            } elseif ($myRoutePos < $currentRoutePos) {
                return 'step-complete';
            }
        }
    }
