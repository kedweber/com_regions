<?php

class ComRegionsDatabaseTableRegions extends KDatabaseTableDefault
{
    /**
     * @param KConfig $config
     */
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
                'lockable',
                'creatable',
                'modifiable',
                'identifiable',
                'orderable',
                'sluggable',
                'com://admin/cck.database.behavior.elementable',
                'com://admin/taxonomy.database.behavior.relationable',
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}