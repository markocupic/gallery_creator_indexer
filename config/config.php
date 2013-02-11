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
 * Register hook to add news items to the indexer
 */

$GLOBALS['TL_HOOKS']['getSearchablePages'][] = array('GalleryCreatorIndexer', 'getSearchablePages');



