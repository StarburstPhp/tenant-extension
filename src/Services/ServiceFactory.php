<?php declare(strict_types=1);

namespace Starburst\Tenants\Services;

use Stefna\Config\Config;

/**
 * @template T
 */
interface ServiceFactory
{
	/**
	 * @param class-string<T> $class
	 * @return T
	 */
	public function create(string $class, mixed ...$args);

	public function reload(Config $config): void;
}
