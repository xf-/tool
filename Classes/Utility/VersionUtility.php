<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
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
 * Version Utility
 *
 * Contains methods to check various aspects about the
 * current TYPO3 version.
 *
 * @author Claus Due
 * @package Tool
 * @subpackage Utility
 */
class Tx_Tool_Utility_VersionUtility {

	/**
	 * @var array
	 */
	static private $version = NULL;

	/**
	 * @return array
	 */
	public static function getVersionAsArray() {
		if (TRUE === is_array(self::$version)) {
			return self::$version;
		}
		self::$version = explode('.', TYPO3_version);
		return self::$version;
	}

	/**
	 * @return boolean
	 */
	public static function assertCoreVersionIsBelowSixPointZero() {
		$version = self::getVersionAsArray();
		return ($version[0] < 6);
	}

	/**
	 * @return boolean
	 */
	public static function assertCoreVersionIsAtLeastSixPointZero() {
		$version = self::getVersionAsArray();
		return ($version[0] >= 6);
	}

	/**
	 * @return boolean
	 */
	public static function assertCoreVersionIsFourPointFive() {
		$version = self::getVersionAsArray();
		return ($version[0] == 4 && $version[1] == 5);
	}

}
