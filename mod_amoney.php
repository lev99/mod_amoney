<?php
/**
 * version 1.1.0 2015
 * author Leonidas
 * copyright (C) 2010 Leonidas. All rights reserved.
 * license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// Leonidas reference parameters
$mod_name               = "mod_amoney";
$mod_copyrights_start   = "\n\n<!-- Leonidas \"Donate-Amoney\" Module (v1.1.0) starts here -->\n";
$mod_copyrights_end     = "\n<!-- Leonidas \"Donate-Amoney\" Module (v1.1.10) ends here -->\n\n";

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
