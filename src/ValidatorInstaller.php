<?php
/*
 * Copyright (c) 2013 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\Symfony\Validator;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;

/**
 * A logger class that writes messages into the php error_log.
 */
class ValidatorInstaller implements PackageInstallerInterface {

	/**
	 * (non-PHPdoc)
	 * @see \Mouf\Installer\PackageInstallerInterface::install()
	 */
	public static function install(MoufManager $moufManager) {

	}
}
