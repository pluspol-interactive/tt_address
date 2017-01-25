<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2006 Ingo Renner (typo3@ingo-renner.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/



/**
 * adds the wizard icon.
 *
 * @author	Ingo Renner <typo3@ingo-renner.com>
 */
class tx_ttaddress_pi1_wizicon {

	/**
	 * Adds the tt_address pi1 wizard icon
	 *
	 * @param	array		Input array with wizard items for plugins
	 * @return	array		Modified input array, having the item for tt_address
	 * pi1 added.
	 */
	public function proc($wizardItems)	{
		$wizardItems['plugins_tx_ttaddress_pi1'] = array(
			'icon'        => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('tt_address').'pi1/ce_wiz.gif',
			'title'       => $GLOBALS['LANG']->sL('LLL:EXT:tt_address/locallang.xml:pi1_title'),
			'description' => $GLOBALS['LANG']->sL('LLL:EXT:tt_address/locallang.xml:pi1_plus_wiz_description'),
			'params'      => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=tt_address_pi1'
		);

		return $wizardItems;
	}

}
