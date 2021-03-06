<?php declare(strict_types=1);

/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Module installation parameters
 *
 * This script conforms to the Xoops standard for xoops_version.php
 *
 * @copyright (c) 2004, Ashley Kitson
 * @copyright     XOOPS Project https://xoops.org/
 * @license       GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author        Ashley Kitson http://akitson.bbcb.co.uk
 * @author        XOOPS Development Team
 * @package       TAGS
 * @subpackage    Installation
 * @access        private
 * @version       1
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}
/**
 * XBS TAGS non langaue specific constant definitions
 */
require_once XOOPS_ROOT_PATH . '/modules/xbstags/include/defines.php';

$moduleDirName      = basename(__DIR__);
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

$modversion['version']       = 2.01;
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2020/08/30';
$modversion['name']          = _MI_XBSTAGS_NAME;
$modversion['description']   = _MI_XBSTAGS_DESC;
$modversion['credits']       = 'Ashley Kitson<br>( http://xoobs.net/ )<br>Hervé Thouzard>(http://www.herve-thouzard.com)';
$modversion['author']        = 'Ashley Kitson';
//$modversion['help'] = "addrhelp.html";
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']            = 0;
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['dirname']             = basename(__DIR__);
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.1';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];
$modversion['system_menu']         = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

// ------------------- Help files ------------------- //
$modversion['help']        = 'page=help';
$modversion['helpsection'] = [
    ['name' => _MI_XBSTAGS_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_XBSTAGS_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_XBSTAGS_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_XBSTAGS_SUPPORT, 'link' => 'page=support'],
];

//$modversion['onUninstall'] = "install_funcs.php";
$modversion['onInstall'] = 'install_funcs.php';
$modversion['onUpdate']  = 'install_funcs.php';

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
//$modversion['sqlfile']['postgresql'] = "sql/pgsql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'] = [
    TAGS_TBL_TAGS,
    TAGS_TBL_TRACK,
    TAGS_TBL_LIST,
];

// Main Menu
$modversion['hasMain'] = 0;

// Admin menu things
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Configuration items

$modversion['config'][1]['name']        = 'use_title';
$modversion['config'][1]['title']       = '_MI_XBSTAGS_USETITLESNAME';
$modversion['config'][1]['description'] = '_MI_XBSTAGS_USETITLESDESC';
$modversion['config'][1]['formtype']    = 'select';
$modversion['config'][1]['valuetype']   = 'int';
$modversion['config'][1]['default']     = TAGS_CFGMETHODTAGS;
$modversion['config'][1]['options']     = [
    _MI_XBSTAGS_TTL0 => TAGS_CFGMETHODXOOPS,   //Use Xoops
    _MI_XBSTAGS_TTL1 => TAGS_CFGMETHODTAGS,    //Use MetaTags
];
$modversion['config'][2]['name']        = 'use_desc';
$modversion['config'][2]['title']       = '_MI_XBSTAGS_USESDESCNAME';
$modversion['config'][2]['description'] = '_MI_XBSTAGS_USEDESCDESC';
$modversion['config'][2]['formtype']    = 'select';
$modversion['config'][2]['valuetype']   = 'int';
$modversion['config'][2]['default']     = TAGS_CFGMETHODTAGS;
$modversion['config'][2]['options']     = [
    _MI_XBSTAGS_DESC0 => TAGS_CFGMETHODXOOPS,  //Use Xoops
    _MI_XBSTAGS_DESC1 => TAGS_CFGMETHODTAGS,   //Use MetaTags
];

$modversion['config'][3]['name']        = 'key_method';
$modversion['config'][3]['title']       = '_MI_XBSTAGS_KEYMETHODNAME';
$modversion['config'][3]['description'] = '_MI_XBSTAGS_KEYMETHODDESC';
$modversion['config'][3]['formtype']    = 'select';
$modversion['config'][3]['valuetype']   = 'text';
$modversion['config'][3]['default']     = TAGS_KEYMETHD_3;

$modversion['config'][3]['options'] = [
    _MI_XBSTAGS_KYD0 => TAGS_KEYMETHD_0,  //use database
    _MI_XBSTAGS_KYD1 => TAGS_KEYMETHD_1,  //auto text order
    _MI_XBSTAGS_KYD2 => TAGS_KEYMETHD_2,  //auto least frequent first
    _MI_XBSTAGS_KYD3 => TAGS_KEYMETHD_3,  //auto most frequent first
    _MI_XBSTAGS_KYD4 => TAGS_KEYMETHD_4,
]; //use Xoops default keywords

$modversion['config'][4]['name']        = 'max_keys';
$modversion['config'][4]['title']       = '_MI_XBSTAGS_MAXKEYWORDNAME';
$modversion['config'][4]['description'] = '_MI_XBSTAGS_MAXKEYWORDDESC';
$modversion['config'][4]['formtype']    = 'textbox';
$modversion['config'][4]['valuetype']   = 'int';
$modversion['config'][4]['default']     = '30';

$modversion['config'][5]['name']        = 'min_keylen';
$modversion['config'][5]['title']       = '_MI_XBSTAGS_MINKEYWORDNAME';
$modversion['config'][5]['description'] = '_MI_XBSTAGS_MINKEYWORDDESC';
$modversion['config'][5]['formtype']    = 'textbox';
$modversion['config'][5]['valuetype']   = 'int';
$modversion['config'][5]['default']     = '5';

$modversion['config'][6]['name']        = 'track_keys';
$modversion['config'][6]['title']       = '_MI_XBSTAGS_TRKKEYNAME';
$modversion['config'][6]['description'] = '_MI_XBSTAGS_TRKKEYDESC';
$modversion['config'][6]['formtype']    = 'yesno';
$modversion['config'][6]['valuetype']   = 'int';
$modversion['config'][6]['default']     = '1';

$modversion['config'][7]['name']        = 'max_tracks';
$modversion['config'][7]['title']       = '_MI_XBSTAGS_MAXTRKNAME';
$modversion['config'][7]['description'] = '_MI_XBSTAGS_MAXTRKDESC';
$modversion['config'][7]['formtype']    = 'textbox';
$modversion['config'][7]['valuetype']   = 'int';
$modversion['config'][7]['default']     = '10';

//Search things
$modversion['hasSearch'] = 0;

//User comments things
$modversion['hasComments'] = 0;

//Module notification things
$modversion['hasNotification'] = 0;
