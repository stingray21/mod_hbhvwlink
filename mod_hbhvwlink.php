<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

//This is the parameter we get from our xml file above
$displayMode = $params->get('displaymode');
$linkmode = $params->get('linkmode');
$manualhvwlink = $params->get('manualhvwlink');
$logoMode = $params->get('logomode');

// get parameter from component menu item
$menuitemid = JRequest::getInt('Itemid');
if ($menuitemid)
{
	$menu = JFactory::getApplication()->getMenu();
	$menuparams = $menu->getParams( $menuitemid );
}
$teamkey = $menuparams->get('teamkey');
$teamkey = strtolower($teamkey);

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

//Returns the path of the layout file
require JModuleHelper::getLayoutPath('mod_hbhvwlink', $params->get('layout', 'default'));

