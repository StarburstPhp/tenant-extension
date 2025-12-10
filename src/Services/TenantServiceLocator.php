<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Starburst\Extensions\Tenants\Entities\Tenant;

interface TenantServiceLocator
{
	/**
	 * @template C of object
	 * @param class-string<C> $service
	 * @return C
	 */
	public function get(string $service): object;

	public function getCurrentTenant(): Tenant;
}
