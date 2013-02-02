<?php
namespace phbergsmann\Composer\Installers;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Philipp Bergsmann <p.bergsmann@opendo.at>
 *  All rights reserved
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * Implements a custom Composer-Installer for the TYPO3 CMS
 *
 * @author    Philipp Bergsmann <p.bergsmann@opendo.at>
 * @package Composer
 * @subpackage Installers
 */

use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;

class TYPO3CMSInstaller extends \Composer\Installer\LibraryInstaller {
	/**
	 * Decides if the installer supports the given type
	 *
	 * @param  string $packageType
	 * @return bool
	 */
	public function supports($packageType) {
		return substr($packageType, 0, 9) === 'typo3-cms';
	}

	/**
	 * @param \Composer\Package\PackageInterface $package
	 * @return string
	 */
	public function getInstallPath(\Composer\Package\PackageInterface $package) {
		return 'typo3conf/ext/' . $package->getPrettyName();
	}
}
?>