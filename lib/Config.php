<?php

namespace Actus\Core;

use Bitrix\Main\Config\Option;

class Config
{
	public const MODULE_ID = 'actus.core';

	/**
	 * Читает опцию модуля Actus (по умолчанию — ядра).
	 */
	public static function get(string $name, string $default = '', ?string $siteId = null, string $moduleId = self::MODULE_ID): string
	{
		return (string)Option::get($moduleId, $name, $default, $siteId);
	}

	/**
	 * Пишет опцию модуля Actus (по умолчанию — ядра).
	 */
	public static function set(string $name, string $value, ?string $siteId = null, string $moduleId = self::MODULE_ID): void
	{
		Option::set($moduleId, $name, $value, $siteId);
	}
}
