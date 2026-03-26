<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductAbstractTransfer;

/**
 * Provides an extension point for injecting Twig template content into product abstract form tabs with priority-based ordering.
 *
 * Use this plugin to render additional templates inside a specific tab (e.g. general, image, seo) of the product
 * abstract add/edit form. Plugins are executed in `ProductAbstractFormTabDataProviderPluginExecutor::provideTabContents()`
 * and sorted by priority before rendering — lower values are rendered first.
 * Use value gaps (e.g. 10, 20, 30) to allow future plugins to insert between existing ones.
 *
 * Use this plugin instead of the deprecated `ProductAbstractFormTabContentProviderPluginInterface`, which does not
 * support priority-based ordering.
 */
interface ProductAbstractFormTabContentProviderWithPriorityPluginInterface
{
    /**
     * Specification:
     * - Returns the name of the tab where the content should be displayed.
     * - Tab names should match existing form tabs (e.g., 'image', 'general', 'price_and_tax', 'attributes', 'seo').
     * - Tab names are taken from \Spryker\Zed\ProductManagement\Communication\Tabs\AbstractProductFormTabs::add*Tab() methods.
     * - @see \Spryker\Zed\ProductManagement\Communication\Tabs\AbstractProductFormTabs
     *
     * @api
     *
     * @return string
     */
    public function getTabName(): string;

    /**
     * Specification:
     * - Returns the rendering priority of this content provider within its tab.
     * - Lower values are rendered first. Value of 1 is the highest priority.
     * - Providers with equal priority are rendered in undefined order.
     * - Use gaps between values (e.g. 10, 20, 30) to allow future providers to insert between existing ones.
     *
     * @api
     *
     * @return int
     */
    public function getPriority(): int;

    /**
     * Specification:
     * - Provides template paths to be included in the product abstract form tab.
     * - Returns array of template paths to be rendered in the tab.
     * - Multiple providers can contribute content to the same tab.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer|null $productAbstractTransfer
     *
     * @return array<string>
     */
    public function provideTabContent(?ProductAbstractTransfer $productAbstractTransfer = null): array;
}
