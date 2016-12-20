<?php
namespace Modules\Sidebar;

use Hubzero\Module\Module;
use App;

class Helper extends Module
{
	/**
	 * Display module contents
	 *
	 * @return  void
	 */
	public function display()
	{
		require $this->getLayoutPath();
	}
}