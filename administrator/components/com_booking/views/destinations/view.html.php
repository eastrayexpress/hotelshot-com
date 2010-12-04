<?php
/**
* @version		$Id: view.html.php 19343 2010-11-03 18:12:02Z ian $
* @package		Joomla
* @subpackage	Config
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

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Poll component
 *
 * @static
 * @package		Joomla
 * @subpackage	Poll
 * @since 1.0
 */
class BookingViewDestinations extends JView
{
	function display( $tpl = null )
	{
		
		global $mainframe, $option;			
		$model=$this->getModel();		
		
		$db					=& JFactory::getDBO();		
		switch($this->_layout)
		{
			default:
				$filter_order		= $mainframe->getUserStateFromRequest( "$option.filter_order",		'filter_order',		'm.id',	'cmd' );
				$filter_order_Dir	= $mainframe->getUserStateFromRequest( "$option.filter_order_Dir",	'filter_order_Dir',	'',		'word' );
				$filter_state		= $mainframe->getUserStateFromRequest( "$option.filter_state",		'filter_state',		'',		'word' );
				$search				= $mainframe->getUserStateFromRequest( "$option.search",			'search',			'',		'string' );
				
				// state filter
				$lists['state']	= JHTML::_('grid.state',  $filter_state );

				// table ordering
				$lists['order_Dir']	= $filter_order_Dir;
				$lists['order']		= $filter_order;

				// search filter
				$lists['search']= $search;

				$this->assignRef('user',		JFactory::getUser());		
				$this->assignRef('items',		$model->getList());		
				$this->assignRef('pagination',	$model->getPagination());
				
			case "form":
				$row	=& JTable::getInstance('destination', 'Table');				
				$cid= JRequest::getVar('cid',array(),'','array');				
				$row->load($cid[0]);				
				$this->assignRef('destination',$row);
				break;				
		}
		parent::display($tpl);
	}
}
