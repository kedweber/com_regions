-- ----------------------------
--  Table structure for `#__regions_regions`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `#__regions_regions` (
  `regions_region_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `cck_fieldset_id` int(11) NOT NULL DEFAULT '1900',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'region',
  `fields` longtext NULL,
  `ordering` bigint(20) unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`regions_region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__fr_regions_regions` (
  `regions_region_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `cck_fieldset_id` int(11) NOT NULL DEFAULT '1900',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'region',
  `fields` longtext NULL,
  `ordering` bigint(20) unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`regions_region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Insert regions into fieldsets
INSERT INTO `#__cck_fieldsets` (`cck_fieldset_id`, `title`, `slug`, `enabled`) VALUES (1900, 'Region', 'region', 1);

-- Insert region fields
INSERT INTO `#__cck_fieldsets_elements` (`cck_fieldset_id`, `cck_element_id`, `required`, `ordering`, `enabled`) VALUES (1900, 1, 1, 3, 1);
INSERT INTO `#__cck_fieldsets_elements` (`cck_fieldset_id`, `cck_element_id`, `required`, `ordering`, `enabled`) VALUES (1900, 25, 0, 2, 1);
INSERT INTO `#__cck_fieldsets_elements` (`cck_fieldset_id`, `cck_element_id`, `required`, `ordering`, `enabled`) VALUES (1900, 2, 0, 1, 1);