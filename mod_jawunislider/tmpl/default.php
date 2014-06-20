<?php
/**
 * @file        default.php
 * @description
 *
 * PHP Version  5.3.13
 *
 * @package 
 * @category
 * @plugin URI
 * @copyright   2014, Vadim Pshentsov. All Rights Reserved.
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @author      Vadim Pshentsov <pshentsoff@gmail.com> 
 * @link        http://pshentsoff.ru Author's homepage
 * @link        http://blog.pshentsoff.ru Author's blog
 *
 * @created     20.06.14
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addScript('modules/mod_jawunislider/assets/jquery.mobile.customized.min.js', 'text/javascript');
$doc->addScript('modules/mod_jawunislider/assets/jquery.easing.1.3.js', 'text/javascript');
$doc->addScript('modules/mod_jawunislider/assets/camera.js', 'text/javascript');
$doc->addStyleSheet('modules/mod_jawunislider/assets/camera.css');

$timthumb = JURI::base() . 'modules/mod_jawunislider/libs/timthumb.php?a=c&q=99&z=0';
