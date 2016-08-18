<?php if (!defined('FW')) die('Forbidden');
/**
 * @var _FW_Available_Extensions_Register $register
 */

$extension = new FW_Available_Extension();
$extension->set_name('test');
$extension->set_title('Test');
$extension->set_description('Testing');
$extension->set_download_source('github', array('user_repo' => 'ThemeFuse/Unyson-Empty-Extension'));

$extensions->set_parent('shortcodes');
$register->register($extension);

