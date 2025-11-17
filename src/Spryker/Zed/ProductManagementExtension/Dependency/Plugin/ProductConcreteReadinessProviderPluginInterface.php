<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

use ArrayObject;
use Generated\Shared\Transfer\ProductConcreteReadinessRequestTransfer;

interface ProductConcreteReadinessProviderPluginInterface
{
    /**
     * Specification:
     * - Expands product concrete readiness collection transfers with additional readiness data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteReadinessRequestTransfer $productConcreteReadinessRequestTransfer
     * @param \ArrayObject<int, \Generated\Shared\Transfer\ProductReadinessTransfer> $productReadinessTransfers
     *
     * @return \ArrayObject<int, \Generated\Shared\Transfer\ProductReadinessTransfer>
     */
    public function provide(
        ProductConcreteReadinessRequestTransfer $productConcreteReadinessRequestTransfer,
        ArrayObject $productReadinessTransfers
    ): ArrayObject;
}
