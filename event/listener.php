<?php
/**
*
* @package phpBB Extension - Posting Buttons
* @copyright (c) 2014 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\postingbuttons\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup' => 'load_language_on_setup',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/postingbuttons',
			'lang_set' => 'postingbuttons',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
