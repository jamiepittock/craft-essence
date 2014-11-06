<?php

namespace Craft;

require CRAFT_PLUGINS_PATH . '/essence/vendor/autoload.php';

use \fg\Essence\Essence;

class EssenceService extends BaseApplicationComponent
{

	protected $essence;

	public $cachedData = false;

	public function __construct()
    {
        $this->essence = new Essence();
    }

	public function embed($url, array $options = array())
	{
		// Is it cached?
		$this->cachedData = craft()->fileCache->get($url);

		if ( $this->cachedData )
		{
			$data = $this->cachedData;

		}
		else {
			$data = $this->essence->embed($url, $options);

			// Cache it
			craft()->fileCache->set($url, $data, '7776000');
		}

		return $data;
	}

}