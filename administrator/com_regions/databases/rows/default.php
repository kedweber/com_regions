<?php
/**
 * Com
 *
 * @author      Dave Li <dave@moyoweb.nl>
 * @category    Nooku
 * @package     Socialhub
 * @subpackage  ...
 * @uses        Com_
 */
 
defined('KOOWA') or die('Protected resource');

class ComRegionsDatabaseRowDefault extends KDatabaseRowDefault
{
    /**
     * @param $column
     * @return string
     */
    public function __get($column)
    {
        $result = parent::__get($column);

        if(!array_key_exists($column, $this->_data)) {
            if($this->isElementable()) {
                $result = $this->getElement($column)->value;
            }
        }

        return $result;
    }
}