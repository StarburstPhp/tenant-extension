<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Starburst\Extensions\Tenants\Entities\Tenant;
use Stefna\Collection\ListCollection;

interface TenantLocator
{
	/**
	 * @return ListCollection<Tenant>
	 */
	public function getAllTenants(): ListCollection;
}
