<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mm_forum".
 *
 * Auto generated 15-09-2013 11:10
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'mm_forum',
	'description' => 'Powerful forum extension developed by Mittwald CM Service, offering a wide range of features.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.9.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1,cron',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'fe_users',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'mm_forum Team (see documentation)',
	'author_email' => 'umsetzung@mittwald.de',
	'author_company' => 'Mittwald CM Service',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'pagebrowse' => '',
			'' => '',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

?>