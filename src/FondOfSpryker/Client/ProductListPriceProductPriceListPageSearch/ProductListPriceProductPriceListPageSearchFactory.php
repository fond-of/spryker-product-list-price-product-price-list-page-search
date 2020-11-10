<?php

namespace FondOfSpryker\Client\ProductListPriceProductPriceListPageSearch;

use FondOfSpryker\Client\ProductListPriceProductPriceListPageSearch\Dependency\Client\ProductListPriceProductPriceListPageSearchToCustomerClientInterface;
use Spryker\Client\Kernel\AbstractFactory;

class ProductListPriceProductPriceListPageSearchFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\ProductListPriceProductPriceListPageSearch\Dependency\Client\ProductListPriceProductPriceListPageSearchToCustomerClientInterface
     */
    public function getCustomerClient(): ProductListPriceProductPriceListPageSearchToCustomerClientInterface
    {
        return $this->getProvidedDependency(
            ProductListPriceProductPriceListPageSearchDependencyProvider::CLIENT_CUSTOMER
        );
    }
}
