<?php

class ComRegionsDispatcher extends ComDefaultDispatcher
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
        	'controller' => 'regions',
        ));
        
        parent::_initialize($config);
    }
}