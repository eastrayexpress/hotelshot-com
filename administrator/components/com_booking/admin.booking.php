<?php
/**
* @version		$Id: poll.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @subpackage	Polls
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Make sure the user is authorized to view this page
/*
$user = & JFactory::getUser();
if (!$user->authorize( 'com_booking', 'manage' )) {
	$mainframe->redirect( 'index.php', JText::_('ALERTNOTAUTH') );
}
*/
$view =JRequest::getCmd('view','booking');
// Set the table directory
JTable::addIncludePath( JPATH_COMPONENT.DS.'tables' );
switch($view)
{
	default:
		$view='booking';
	case 'destinations':
		//add submenus 
		JSubMenuHelper::addEntry("Popular Destinations","index.php?option=com_booking&view=destinations",$view=="destinations");
		require_once( JPATH_COMPONENT.DS.'controllers'.DS.$view.'.php' );
		// Create the controller
		$controllerName ="BookingController".$view;
		$controller	= new $controllerName();

		$controller->execute( JRequest::getCmd( 'task' ) );
		$controller->redirect();
		break;
}




