<?php /* PROJECTS $Id: projects_tab.links.php 5872 2009-04-25 00:09:56Z merlinyoda $ */
if (!defined('DP_BASE_DIR')) {
	die('You should not access this file directly.');
}

GLOBAL $AppUI, $project_id, $deny, $canRead, $canEdit, $dPconfig;

$showProject = false;
require(DP_BASE_DIR . '/modules/links/index_table.php');
?>
