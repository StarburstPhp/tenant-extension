<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Starburst\Extensions\Tenants\Entities\Tenant;
use Starburst\Extensions\Tenants\Exceptions\InvalidTenantId;
use Starburst\Extensions\Tenants\Exceptions\TenantNotFound;
use Starburst\Extensions\Tenants\Values\TenantId;

interface TenantService extends TenantLocator
{
	/**
	 * @throws TenantNotFound
	 */
	public function configureCurrentTenant(Tenant|TenantId $tenant): Tenant;

	/**
	 * @throws InvalidTenantId
	 */
	public function createTenantId(mixed $tenant): TenantId;
}
