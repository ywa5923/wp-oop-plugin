<?php
/*
Plugin Name: Change me
Plugin URI: https://mattic.eu
Description:  This plugin is a wordpress scheleton plugin
Version: 1.0.0
Author: Ivan Ion
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: add me
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2018 Ion Ivan
*/
/* ======================BOOTSTRAP========================= */


defined('ABSPATH') or exit('Error');


$thisPath = dirname(__FILE__);

require_once($thisPath . "/config.php");


if (file_exists($autoloadFile = $thisPath . '/vendor/autoload.php')) {
    require_once $autoloadFile;
}

/* ======================END BOOTSTRAP========================= */


/* ======================BOOTSTRAP========================= */


function change_me_ActivationCallback()
{
    $activate = new CHANGE_ME\Actions\Activation\Activate();
    $activate->init();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'change_me_ActivationCallback');



function change_me_DeactivationCallback()
{
    $deactivate = new CHANGE_ME\Actions\Deactivation\Deactivate();
    $deactivate->init();
}

register_deactivation_hook(__FILE__, 'change_me_DeactivationCallback');


function change_UninstallCallback()
{
    // $uninstall = new BF5923\Actions\Uninstall\Uninstall();

    // $uninstall->init();
}
//register_uninstall_hook(__FILE__, 'bf5923_UninstallCallback');



$manager = new WOH\Core\ActionsLoader();
$manager->loadAllActions("CHANGE_ME\\");
