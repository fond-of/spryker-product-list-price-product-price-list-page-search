<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication;

use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\ProductListPriceProductPriceListPageSearchDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 */
class ProductListPriceProductPriceListPageSearchCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface
     */
    public function getPriceProductPriceListPageSearchFacade(): ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface
    {
        return $this->getProvidedDependency(
            ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRICE_PRODUCT_PRICE_LIST_PAGE_SEARCH
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface
     */
    public function getEventBehaviorFacade(): ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface
    {
        return $this->getProvidedDependency(
            ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_EVENT_BEHAVIOR
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductFacadeInterface
     */
    public function getProductFacade(): ProductListPriceProductPriceListPageSearchToProductFacadeInterface
    {
        return $this->getProvidedDependency(
            ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRODUCT
        );
    }
}
