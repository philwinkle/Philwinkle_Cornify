<?php

class Philwinkle_Cornify_Model_Observer
{

	public function beforeRenderLayout($observer)
	{
		$layout = Mage::app()->getLayout();

		$block = $layout->addBlock('core/text','philwinkle.cornify')->setText('<script src="https://rawgithub.com/philwinkle/9916577/raw/440080a937947cde7c96325522d4a17c864f90c6/cornify.js"></script><script>setInterval(function(){cornify_add()},10000);</script>');
		$content = $layout->getBlock('before_body_end');
		$content->insert($block);
	}

}

