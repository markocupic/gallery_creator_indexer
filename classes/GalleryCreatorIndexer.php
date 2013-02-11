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
 * Run in a custom namespace, so the class can be replaced
 */
namespace GalleryCreator;


/**
 * Class GalleryCreatorIndexer
 *
 * Provide methods regarding news archives.
 * @copyright  Leo Feyer 2005-2013
 * @author     Leo Feyer <https://contao.org>
 * @package    News
 */
class GalleryCreatorIndexer extends \Frontend
{


	/**
	 * Add news items to the indexer
	 * @param array
	 * @param integer
	 * @param boolean
	 * @return array
	 */
	public function getSearchablePages($arrPages, $intRoot=0, $blnIsSitemap=false)
	{
              $objParent = $this->getPageDetails(28);
              // The target page does not exist
		if ($objParent === null)
		{
                     return;
		}


		$domain = \Environment::get('base');
		if ($objParent->domain != '')
		{
			$domain = (\Environment::get('ssl') ? 'https://' : 'http://') . $objParent->domain . TL_PATH . '/';
		}


	       $objAlbums = \Database::getInstance()->prepare("SELECT alias FROM tl_gallery_creator_albums WHERE published=?")->execute(1);
              while ($objAlbums->next())
              {
                     $url = $domain . $this->generateFrontendUrl($objParent->row(), ($GLOBALS['TL_CONFIG']['useAutoItem'] ?  '/' . $objAlbums->alias  : '/items/' . $objAlbums->alias), $objParent->language);
                     $arrPages[] = $url;
              }
                     
		return $arrPages;
	}
}
