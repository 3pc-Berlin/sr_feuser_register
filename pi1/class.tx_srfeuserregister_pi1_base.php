<?php
/***************************************************************
*  Copyright notice
*
*  (c) 1999-2003 Kasper Skårhøj (kasperYYYY@typo3.com)
*  (c) 2004-2012 Stanislas Rolland <typo3(arobas)sjbr.ca>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 *
 * Part of the sr_feuser_register (Front End User Registration) extension.
 * A variant restricted to front end user self-registration and profile maintenance, with a number of enhancements (see the manual).
 *
 * $Id$
 *
 * @author	Kasper Skårhøj <kasperYYYY@typo3.com>
 * @author	Stanislas Rolland <typo3(arobas)sjbr.ca>
 * @author	Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 *
 *
 */
class tx_srfeuserregister_pi1_base extends tslib_pibase {

		// Plugin initialization variables
	public $prefixId = 'tx_srfeuserregister_pi1';		// Should be same as classname of the plugin, used for CSS classes, variables
	public $scriptRelPath = 'pi1/class.tx_srfeuserregister_pi1_base.php'; // Path to this script relative to the extension dir.
	public $extKey = SR_FEUSER_REGISTER_EXTkey;		// Extension key.

	public function main ($content, $conf) {

		$this->pi_setPiVarDefaults();
		$this->conf = &$conf;
		$mainObj = &t3lib_div::getUserObj('&tx_srfeuserregister_control_main');
		$mainObj->cObj = &$this->cObj;

		$content = $this->checkRequirements();
		if (!$content) {
			$content = &$mainObj->main($content, $conf, $this, 'fe_users');
		}
		return $content;
	}

	/* Checks requirements for this plugin
	 *
	 * @return string Error message, if error found, empty string otherwise
	 */
	protected function checkRequirements() {
		$content = '';
		if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$this->extKey]['constraints']['depends'])) {
			$requiredExtensions = array_diff(array_keys($GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$this->extKey]['constraints']['depends']), array('php', 'typo3'));
			foreach ($requiredExtensions as $requiredExtension) {
				if (!t3lib_extMgm::isLoaded($requiredExtension)) {
					t3lib_div::sysLog('Required extension "' . $requiredExtension . '" is not available and must be installed', $this->extKey, t3lib_div::SYSLOG_SEVERITY_ERROR);
					$content .= '<p><big><b>Extension "' . $requiredExtension . '", required by extension "' . $this->extKey . '", is not available and must be installed.</b></big></p>';
				}
			}
		}
		return $content;
	}
}
if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/sr_feuser_register/pi1/class.tx_srfeuserregister_pi1_base.php']) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/sr_feuser_register/pi1/class.tx_srfeuserregister_pi1_base.php']);
}
?>