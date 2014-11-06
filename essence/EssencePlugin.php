<?php
namespace Craft;

class EssencePlugin extends BasePlugin
{

	function getName()
	{
		return Craft::t('Essence');
	}

	function getVersion()
	{
		return '0.1';
	}

	function getDeveloper()
	{
		return 'Chief';
	}

	function getDeveloperUrl()
	{
		return 'http://withchief.com';
	}

    public function addTwigExtension()
    {
        Craft::import('plugins.essence.twigextensions.EssenceTwigExtension');
        return new EssenceTwigExtension();
    }

	function init()
	{
		
	}
}