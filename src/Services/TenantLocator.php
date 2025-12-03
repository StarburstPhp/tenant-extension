<?php declare(strict_types=1);

namespace Starburst\Tenants\Services;

use Starburst\Tenants\Entities\Tenant;
use Stefna\Collection\ListCollection;

interface TenantLocator
{
	/**
	 * @return ListCollection<Tenant>
	 */
	public function getAllTenants(): array;

	public function getCurrentTenant(): Tenant;
}
