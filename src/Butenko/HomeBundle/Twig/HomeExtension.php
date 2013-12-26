<?php
/**
 * Created by PhpStorm.
 * User: kanni
 * Date: 12/26/13
 * Time: 1:13 PM
 */

namespace Butenko\HomeBundle\Twig;


class HomeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('post_limiter', array($this, 'postFilter'))
        );
    }

    public function postFilter($text, $length)
    {
        return substr($text, 0, $length);
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('dot_dot_dot', array($this, 'addLink')),
        );
    }

    public function addLink($path)
    {
        return '<a href="'.$path.'">...</a>';
    }

    public function getName()
    {
        return 'home_extension';
    }

} 