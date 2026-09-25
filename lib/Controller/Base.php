<?php

namespace Actus\Core\Controller;

use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Engine\Controller;

class Base extends Controller
{
	/**
	 * Префильтры по умолчанию для action-методов Actus.
	 */
	protected function getDefaultPreFilters(): array
	{
		return [
			new ActionFilter\HttpMethod([ActionFilter\HttpMethod::METHOD_POST]),
			new ActionFilter\Csrf(),
		];
	}
}
