<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Starburst\Extensions\Tenants\Entities\Tenant;
use Starburst\Extensions\Tenants\Values\TenantId;

interface TenantService extends TenantLocator
{
	public function configureTenant(Tenant|TenantId $tenant): Tenant;

	public function createTenantId(mixed $tenant): TenantId;
}
