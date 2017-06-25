<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Fh-counter
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Samson',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Samson\Chronik\Chronik' => 'system/modules/chronik/classes/Chronik.php',
	'Samson\Chronik\Helper'  => 'system/modules/chronik/helper/Helper.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'chronik_list'           => 'system/modules/chronik/templates'
)); 

