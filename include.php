<?php

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('actus.core', [
	'Actus\\Core\\Config' => 'lib/Config.php',
	'Actus\\Core\\Controller\\Base' => 'lib/Controller/Base.php',
	'Actus\\Core\\Helper\\Sale' => 'lib/Helper/Sale.php',
]);
