<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

interface ConfigurableTenantService
{
	/**
	 * @template T
	 * @param class-string<T> $name
	 * @param ServiceFactory<T> $factory
	 */
	public function addServiceFactory(string $name, ServiceFactory $factory): void;
}
