<?php

namespace Ipulmisaja\Macoa\Helpers;

class DateFormat
{
    public static function convert($date)
    {
        $month = array(
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
		         'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $split = explode('-', $date);

        return $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];
    }

    public static function convertDateTime($dateTime)
    {
        $month = array(
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
		         'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $split = explode('-', explode(' ', $dateTime)[0]);

        return $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];
    }
}