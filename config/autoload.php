<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
       'GalleryCreator',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
       // Classes
       'GalleryCreator\GalleryCreatorIndexer' => 'system/modules/gallery_creator_indexer/classes/GalleryCreatorIndexer.php',

));


