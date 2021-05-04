<?php

namespace Ipulmisaja\Macoa\Helpers;

use Ipulmisaja\Macoa\Dependencies\InputMask\Stripper;

class Mask
{
    public static function mask($target, $pattern)
    {
        $nums = [];
        $alphas = [];

        $nums_in_target = (new Stripper($target, ['num']))->strip();
        $alphas_in_target = (new Stripper($target, ['alpha']))->strip();

        if (strlen($nums_in_target) > 0) {
            $nums = str_split($nums_in_target);
        }

        if (strlen($alphas_in_target) > 0) {
            $alphas = str_split($alphas_in_target);
        }

        $output = [];

        if (strlen((new Stripper($target, ['num', 'alpha']))->strip()) > 0) {
            foreach (str_split($pattern) as $char) {
                if ($char === 'A') {
                    //this means we want to take the first element that's left in our alphas array and append it to output.
                    if (count($alphas) == 0) {
                        break;
                        //just end the flow altogether - we're done here.
                    }
                    $output[] = array_shift($alphas);
                } elseif ($char === '1') {
                    if (count($nums) == 0) {
                        break;
                        //just end the flow altogether - we're done here.
                    }
                    $output[] = array_shift($nums);
                } else {
                    if (count($alphas) == 0 && count($nums) == 0) {
                        break;
                    }
                    $output[] = $char;
                }
            }
        }

        return implode($output);
    }
}