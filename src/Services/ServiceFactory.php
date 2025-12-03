<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Services;

use Stefna\Config\Config;

/**
 * @template T of object
 */
interface ServiceFactory
{
	/**
	 * @param class-string<T> $class
	 * @return T
	 */
	public function create(string $class): object;

	/**
	 * @return static<T>
	 */
	public function withConfig(Config $config): static;
}
