<?php


if (! function_exists('session_extract')) {
    /**
     * Extract data to a session
     *
     * @return string
     */
    function session_extract($param)
    {

        if(is_object($param)) {
            $data = $param->toArray();
        };

        foreach($data as $key => $value) {
            session([$key => $value]);
        }

        return $param;
    }
}
