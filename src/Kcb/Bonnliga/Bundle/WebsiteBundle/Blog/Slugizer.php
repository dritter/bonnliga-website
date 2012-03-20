<?php

namespace Kcb\Bonnliga\Bundle\WebsiteBundle\Blog;

use Sylius\Bundle\BloggerBundle\Inflector\SlugizerInterface;

class Slugizer implements SlugizerInterface {

    public function slugize($string) {
        $string = preg_replace('~[^\\pL0-9]+~u', '-', $string);
        $string = trim($string, "-");
        $string = mb_strtolower($string, 'utf-8');
        $string = str_replace(array('ä', 'ö', 'ü', 'ß'), array('ae', 'oe', 'ue', 'ss'), $string);
        $string = iconv("utf-8", "us-ascii//TRANSLIT//IGNORE", $string);
        $string = preg_replace('~[^-a-z0-9_]+~', '', $string);
        $string = preg_replace('(\-+)', '-', $string);
        $string = trim($string, '-');
        return rawurlencode($string);
    }

}
