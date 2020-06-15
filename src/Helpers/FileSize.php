<?php

namespace Ipulmisaja\Macoa\Helpers;

use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class FileSize
{
    public static function convert($filesize)
    {
        $i = floor(log($filesize) / log(1024));
        return number_format(($filesize / pow(1024, $i)), 2, ',') . ' ' . ['B', 'kB', 'MB', 'GB', 'TB'][$i];
    }
}