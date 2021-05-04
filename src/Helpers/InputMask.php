<?php

namespace Ipulmisaja\Macoa\Helpers;

class InputMask
{
    public static function mask($number, $pattern)
    {
        if (strlen($number) > 0) {
            $nums = str_split($number);
        }

        $output = [];

        if (strlen($number) > 0) {
            foreach (str_split($pattern) as $char) {
                if ($char === '1') {
                    if (count($nums) == 0) {
                        break;
                        //just end the flow altogether - we're done here.
                    }
                    $output[] = array_shift($nums);
                } else {
                    if (count($nums) == 0) {
                        break;
                    }
                    $output[] = $char;
                }
            }
        }

        return implode($output);
    }
}