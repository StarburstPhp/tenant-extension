<?php declare(strict_types=1);

namespace Starburst\Tenants\Services;

use Starburst\Tenants\Entities\Tenant;
use Starburst\Tenants\Values\TenantId;

interface TenantService extends TenantLocator
{
	public function configureTenant(Tenant|TenantId $tenant): Tenant;

	public function createTenantId(mixed $tenant): TenantId;
}
