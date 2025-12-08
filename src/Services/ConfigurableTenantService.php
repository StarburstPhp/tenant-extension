<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

interface ConfigurableTenantService
{
	/**
	 * @template T of object
	 * @param class-string<T> $name
	 * @param ServiceFactory<T>|class-string<ServiceFactory<T>> $factory
	 */
	public function addServiceFactory(string $name, ServiceFactory|string $factory): void;
}
