<?php

/**
 * As discussed with Joachim, if a user is super admin, then this user always has permissions,
 * if a user isn't then the user will be checked for groups and regions, if none are present, then you don't have permissions.
 * If a user has regions/ groups then these will be applied as a filter.
 * 
 * Also if a user has regions, it can only select regions from which it is a member.
 */

class ComRegionsDatabaseBehaviorRegionable extends KDatabaseBehaviorAbstract
{
    public function _beforeTableSelect(KCommandContext $context)
    {
        // First we will query com_profiles.
        // But first we will get the needed regions.
        $user = JFactory::getUser();

        if(!$user->get('isRoot')) {
            $regions = $this->getService('com://admin/profile.model.groups')->group_id(array_values($user->groups))->getList()->getRegions();

            if(empty($regions)) {
                $context->query = null;
            }
        
            foreach ($regions as $region) {
                $context->query->where('FIND_IN_SET(' . $region . ', REPLACE(SUBSTRING_INDEX(SUBSTR(ANCESTORS,LOCATE(\'"REGIONS":[\',ANCESTORS)+CHAR_LENGTH(\'"REGIONS":[\')),\']\', 1),\'\', \'\'))', null, null, 'OR');
            }
        }
    }
}