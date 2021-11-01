<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

/**
 * Allows to expand view data for list of abstract products at ProductManagement/IndexController::indexAction().
 */
interface ProductAbstractListActionViewDataExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands view data for list of abstract products with new data.
     *
     * @api
     *
     * @param array<string, mixed> $viewData
     *
     * @return array<string, mixed>
     */
    public function expand(array $viewData): array;
}
