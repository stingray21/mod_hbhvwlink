<?php
//No access
defined( '_JEXEC' ) or die;

$HVWlink = $manualhvwlink;
if ($linkmode == 'component')
{
	//Add database instance
	$db = JFactory::getDBO();
	$jAp = JFactory::getApplication();

	// getting further Information of the team
	$query = $db->getQuery(true);
	$query->select('HVWlink');
	$query->from($db->nameQuote('hb_teams'));
	$query->where($db->nameQuote('teamkey').' = '.$db->Quote($teamkey));
	$db->setQuery($query);
	$HVWlink = $db->loadResult ();

	//display and convert to HTML when SQL error
	if (is_null($posts=$db->loadRowList())) 
	{
		$jAp->enqueueMessage(nl2br($db->getErrorMsg()),'error');
		return;
	}
}	