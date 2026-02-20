<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductAbstractTransfer;

interface ProductAbstractFormTabContentProviderPluginInterface
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
     * - Provides template paths to be included in product abstract form tabs.
     * - Returns array of template paths to be rendered in the tab.
     * - Template paths should use module notation (e.g., '@ModuleName/path/to/template.twig').
     * - Multiple plugins can provide content for the same tab.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer|null $productAbstractTransfer
     *
     * @return array<string> Array of template paths
     */
    public function provideTabContent(?ProductAbstractTransfer $productAbstractTransfer = null): array;
}
