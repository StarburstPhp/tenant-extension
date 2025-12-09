<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Starburst\Extensions\Tenants\Entities\Tenant;
use Starburst\Extensions\Tenants\Exceptions\InvalidTenantId;
use Starburst\Extensions\Tenants\Exceptions\TenantNotConfigured;
use Starburst\Extensions\Tenants\Exceptions\TenantNotFound;
use Starburst\Extensions\Tenants\Values\TenantId;

interface TenantService extends TenantLocator
{
	/**
	 * Configures the current tenant
	 *
	 * Will dispatch TenantLoaded/TenantUnLoaded events and set the current tenant
	 *
	 * @throws TenantNotFound
	 */
	public function configureCurrentTenant(Tenant|TenantId $tenant): Tenant;

	/**
	 * Configures a tenant
	 *
	 * Returns a service locator configured with this tenant
	 * Will not dispatch any TenantLoaded events or set it as the current tenant
	 *
	 * @throws TenantNotFound
	 */
	public function configureTenant(Tenant|TenantId $tenant): TenantServiceLocator;

	/**
	 * @throws InvalidTenantId
	 */
	public function createTenantId(mixed $tenant): TenantId;

	/**
	 * @throws TenantNotConfigured
	 */
	public function getCurrentTenant(): Tenant;
}
