<?php


if (! function_exists('my_date_format'))
{
    /**
     *
     *
     * @param $dateTime
     * @param string $format
     *
     */
    function my_date_format($dateTime, $format = 'd-m-Y')
    {
        $date = date($format, strtotime($dateTime));

        return $date;
    }

}

if(! function_exists('pretty_date'))
{

    /**
     * Format date according to present date.
     * 
     * <month> <day>, <year> (<hours:minutes:seconds>) - if date is from previous year.
     * <month> <day> (<hours:minutes:seconds>)         - if date is within the year/month.
     * <hours:minutes:seconds>                         - if date is within the day.
     * 
     * @param type $dateTime 
     * @return type
     */
    function pretty_date( $dateTime )
    {

        $start  = date_create($dateTime);
        $end    = date_create(); // Current time and date
        $diff   = date_diff( $start, $end );

        if( $diff->y > 0 ) {
            $date = date_format($dateTime, 'M j, Y (g:i a)');
        } elseif( $diff->y < 1 && $diff->d > 0 ) {
            $date = date_format($dateTime, 'M j, (g:i a)');
        } else {
            $date = date_format($dateTime, 'g:i a');
        }

        return $date;
    }
}