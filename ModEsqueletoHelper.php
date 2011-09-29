<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModEsqueletoHelper
{
    /**
     * Returns a list of post items
    */
    public function getItems($userCount)
    {
        // get a reference to the database
        $db = &JFactory::getDBO();
 
        // get a list of $userCount randomly ordered users 
        $query = 'SELECT a.name FROM `#__users` AS a ORDER BY rand() LIMIT ' . $userCount  . '';
 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
 
        return $items;
    } //end getItems
 
}
?>