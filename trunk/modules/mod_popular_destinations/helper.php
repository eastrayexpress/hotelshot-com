<?php

class ModPopularDestinationsHelper
{
	var $db =null;
	function __construct()
	{
		$this->db =&JFactory::getDBO();		
	}
	function getDestinations($default=4)
	{
		$query ="SELECT * FROM #__booking_populardestinations WHERE published=1 ORDER BY title LIMIT $default";
		$this->db->setQuery($query);
		$list =$this->db->loadObjectList();
		return $list;		
	}	
}