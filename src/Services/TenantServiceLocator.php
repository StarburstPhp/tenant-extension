<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

interface TenantServiceLocator
{
	/**
	 * @template C of object
	 * @param class-string<C> $service
	 * @return C
	 */
	public function get(string $service): object;
}
