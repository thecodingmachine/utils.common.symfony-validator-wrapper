<?php
/*
 * Copyright (c) 2013 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\Symfony\Validator;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;
use Mouf\Actions\InstallUtils;

/**
 * Install process that creates the "validator" instance.
 */
class ValidatorInstaller implements PackageInstallerInterface {

	/**
	 * (non-PHPdoc)
	 * @see \Mouf\Installer\PackageInstallerInterface::install()
	 */
	public static function install(MoufManager $moufManager) {
		// Let's create the instances.
		$validator = InstallUtils::getOrCreateInstance('validator', null, $moufManager);
		$validator->setCode('$validationBuilder = Symfony\Component\Validator\Validation::createValidatorBuilder();
$validationBuilder->enableAnnotationMapping($container->get(\'annotationReader\'));
$validationBuilder->setTranslator($container->get(\'symfonyTranslator\'));
return $validationBuilder->getValidator();');
		
		// Let's rewrite the MoufComponents.php file to save the component
		$moufManager->rewriteMouf();
	}
}
