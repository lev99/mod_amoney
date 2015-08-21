<?php
/**
 * @package     AMoney
 * @subpackage  mod_amoney
 * @version     3.0
 * @author      Adeptus, adeptus@adeptsite.info
 * @copyright   Copyright (C) 2008 Adeptus. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
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
