<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\AvailabilityWidgetExtension\Dependency\Plugin;

/**
 * Provides formatting strategy for product availability quantities.
 *
 * Implement this interface to add custom quantity formatting logic for specific product types.
 */
interface AvailabilityQuantityFormatterStrategyPluginInterface
{
    /**
     * Specification:
     * - Checks if this strategy can handle the given product type.
     * - Returns true if the strategy is applicable for the product.
     *
     * @api
     *
     * @param mixed $product
     *
     * @return bool
     */
    public function isApplicable(mixed $product): bool;

    /**
     * Specification:
     * - Formats the product quantity according to the strategy.
     * - Uses the provided locale for localization.
     * - Returns formatted quantity string or null if strategy cannot format the product.
     *
     * @api
     *
     * @param mixed $product
     * @param string $locale
     *
     * @return string|null
     */
    public function formatQuantity(mixed $product, string $locale): ?string;
}
