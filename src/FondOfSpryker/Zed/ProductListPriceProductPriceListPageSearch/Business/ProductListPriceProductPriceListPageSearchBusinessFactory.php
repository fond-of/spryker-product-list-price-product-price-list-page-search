<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business;

use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductAbstractPriceListPageSearchExpander;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductConcretePriceListPageSearchExpander;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductPriceListPageSearchExpanderInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\ProductListPriceProductPriceListPageSearchDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class ProductListPriceProductPriceListPageSearchBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductPriceListPageSearchExpanderInterface
     */
    public function createPriceProductAbstractPriceListPageSearchExpander(): PriceProductPriceListPageSearchExpanderInterface
    {
        return new PriceProductAbstractPriceListPageSearchExpander(
            $this->getProductListFacade()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductPriceListPageSearchExpanderInterface
     */
    public function createPriceProductConcretePriceListPageSearchExpander(): PriceProductPriceListPageSearchExpanderInterface
    {
        return new PriceProductConcretePriceListPageSearchExpander(
            $this->getProductListFacade()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface
     */
    protected function getProductListFacade(): ProductListPriceProductPriceListPageSearchToProductListFacadeInterface
    {
        return $this->getProvidedDependency(
            ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRODUCT_LIST
        );
    }
}
