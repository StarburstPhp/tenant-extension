<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Repositories;

use Starburst\Extensions\Tenants\Entities\Tenant;
use Starburst\Extensions\Tenants\Exceptions\TenantNotFound;
use Starburst\Extensions\Tenants\Values\TenantId;
use Stefna\Collection\ListCollection;

interface TenantRepository
{
	/**
	 * @return ListCollection<Tenant>
	 */
	public function findAll(): ListCollection;

	/**
	 * @throws TenantNotFound
	 */
	public function findById(TenantId $id): Tenant;
}
