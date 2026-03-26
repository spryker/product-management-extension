<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductAbstractTransfer;

/**
 * Provides an extension point for adding options to the product abstract form.
 *
 * Use this plugin to supply additional form option values (e.g. dropdown choices) consumed by
 * Symfony form types added to the product abstract form. Plugins are executed in
 * `AbstractProductFormDataProvider::expandFormOptions()` for both the add and edit product abstract forms.
 *
 * Typically used together with `ProductAbstractFormOptionsResolverExpanderPluginInterface`, which
 * must declare the corresponding option keys in the Symfony OptionsResolver before this plugin provides their values.
 */
interface ProductAbstractFormOptionsExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands product form options with additional options.
     * - Returns modified form options array.
     *
     * @api
     *
     * @param array<string, mixed> $formOptions
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return array<string, mixed>
     */
    public function expand(array $formOptions, ProductAbstractTransfer $productAbstractTransfer): array;
}
