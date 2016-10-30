<?php
/**
 * Created by PhpStorm.
 * User: sascha
 * Date: 10/30/2016
 * Time: 7:39 PM
 */

namespace ArmSacrificeBundle\Utils;

class JobHelper {

    static public function slugify($text)
    {
        // change space to dash
        $text = preg_replace('/ +/', '-', $text);
        // to lowercase
        $text = mb_strtolower(trim($text, '-'), 'utf-8');

        return $text;
    }
}