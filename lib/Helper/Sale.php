<?php

namespace Actus\Core\Helper;

use Actus\Core\Config;
use Bitrix\Main\Loader;
use Bitrix\Main\SystemException;
use Bitrix\Sale\Basket;
use Bitrix\Sale\Fuser;

class Sale
{
	/**
	 * ID покупателя (FUser) для текущей сессии.
	 */
	public static function getFuserId(): int
	{
		return (int)Fuser::getId();
	}

	/**
	 * Корзина текущего покупателя на сайте.
	 */
	public static function loadBasket(?string $siteId = null): Basket
	{
		if (!Loader::includeModule('sale')) {
			throw new SystemException('Требуется модуль sale');
		}

		$siteId = $siteId ?: SITE_ID;

		return Basket::loadItemsForFUser(static::getFuserId(), $siteId);
	}

	/**
	 * URL страницы оформления заказа из опции ORDER_PAGE_URL модуля actus.core.
	 */
	public static function getOrderPageUrl(?string $siteId = null): string
	{
		$siteId = $siteId ?: SITE_ID;
		$url = trim(Config::get('ORDER_PAGE_URL', '', $siteId));

		if ($url === '') {
			throw new SystemException('Не задана опция ORDER_PAGE_URL модуля actus.core');
		}

		return $url;
	}
}
