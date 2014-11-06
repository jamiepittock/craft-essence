<?php

namespace Craft;

class EssenceTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return Craft::t('Essence');
    }

    // @TODO: Maybe later?
    // public function getFilters()
    // {
    //     return array(
    //         'essence_replace' => new \Twig_Filter_Method($this, 'replace')
    //     );
    // }

    public function getFunctions()
    {
        return array(
            'essence_embed' => new \Twig_Function_Method($this, 'embed')
        );
    }

    public function embed($url, array $options = array())
    {
        return craft()->essence->embed($url, $options);
    }

}