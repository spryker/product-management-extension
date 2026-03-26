<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagementExtension\Dependency\Plugin;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Provides an extension point for configuring the Symfony OptionsResolver of the product abstract form.
 *
 * Use this plugin to declare additional allowed or required form options (via `setDefined()`, `setDefaults()`, etc.)
 * so Symfony accepts them when the form is built. Plugins are executed during `ProductFormAdd::configureOptions()`
 * and apply to abstract product forms only — they are no-ops on concrete product forms.
 *
 * Typically used together with `ProductAbstractFormOptionsExpanderPluginInterface`, which supplies the actual
 * option values after the keys have been declared here.
 */
interface ProductAbstractFormOptionsResolverExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the Symfony OptionsResolver for the abstract product form.
     * - Use to declare additional options via setDefined(), setDefaults(), etc.
     * - Called during ProductFormAdd::configureOptions().
     *
     * @api
     *
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     *
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    public function expand(OptionsResolver $resolver): OptionsResolver;
}
