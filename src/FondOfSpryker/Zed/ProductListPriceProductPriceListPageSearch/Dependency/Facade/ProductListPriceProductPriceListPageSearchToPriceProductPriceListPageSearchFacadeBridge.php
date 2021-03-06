<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade;

use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Business\PriceProductPriceListPageSearchFacadeInterface;

class ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge implements
    ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface
{
    /**
     * @var \FondOfSpryker\Zed\PriceProductPriceListPageSearch\Business\PriceProductPriceListPageSearchFacadeInterface
     */
    protected $priceProductPriceListPageSearchFacade;

    /**
     * @param \FondOfSpryker\Zed\PriceProductPriceListPageSearch\Business\PriceProductPriceListPageSearchFacadeInterface $priceProductPriceListPageSearchFacade
     */
    public function __construct(PriceProductPriceListPageSearchFacadeInterface $priceProductPriceListPageSearchFacade)
    {
        $this->priceProductPriceListPageSearchFacade = $priceProductPriceListPageSearchFacade;
    }

    /**
     * @param int[] $productAbstractIds
     *
     * @return void
     */
    public function publishAbstractPriceProductByByProductAbstractIds(array $productAbstractIds): void
    {
        $this->priceProductPriceListPageSearchFacade->publishAbstractPriceProductByByProductAbstractIds(
            $productAbstractIds
        );
    }

    /**
     * @param int[] $productIds
     *
     * @return void
     */
    public function publishConcretePriceProductByProductIds(array $productIds): void
    {
        $this->priceProductPriceListPageSearchFacade->publishConcretePriceProductByProductIds(
            $productIds
        );
    }
}
