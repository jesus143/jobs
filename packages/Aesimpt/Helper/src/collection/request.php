<?php


if (! function_exists('get_input')) {
    /**
     *
     *
     *
     */
    function get_input($request = null)
    {
        $input = (!empty(\Request::all())) ? \Request::all() :  Input::all();

        if (empty($input)) {
            if(! empty($request)) {
                $input = $request->all();
            }
        }

        return (object) $input;
    }
}