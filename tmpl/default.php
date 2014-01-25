<?php 
defined( '_JEXEC' ) or die( 'Restricted access' );


$document =& JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_hbhvwlink/css/default.css');

if ($HVWlink != '')
{
	//echo "<p>".JText::_('DESC_MODULE')."</p>";

	echo '<div class="HVWlink">';
	
	if ($displayMode == 'both' OR $displayMode == 'logo')
	{
		echo '<a class="imageLink" href="'.$HVWlink.'" target="_blank">';
		echo '<img src="'.JURI::root().'modules/mod_hbhvwlink/images/';
		switch ($logomode)
		{
			case 'notext': 
				echo 'HVW_Logo_noText.png';
				break;
			case 'full':
			default:
				echo 'HVW_Logo_full.png';
				break;
		}
		echo '" alt="HVW Logo" /></a>';
	}

	if ($displayMode == 'both' OR $displayMode == 'text')
	{
		echo '<p>Für eventuell aktuellere Informationen: <a class="textLink" href="'.$HVWlink.'" target="_blank" ><br />www.hvw-online.org</a></p>';
	}
	echo '</div>';
}