<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model;

use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Generated\Shared\Transfer\ProductListMapTransfer;

abstract class AbstractPriceProductPriceListPageSearchExpander implements PriceProductPriceListPageSearchExpanderInterface
{
    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface
     */
    protected $productListFacade;

    /**
     * @param \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface $productListFacade
     */
    public function __construct(
        ProductListPriceProductPriceListPageSearchToProductListFacadeInterface $productListFacade
    ) {
        $this->productListFacade = $productListFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer
     */
    public function expandWithProductLists(
        PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
    ): PriceProductPriceListPageSearchTransfer {
        $priceProductPriceListPageSearchTransfer->requireIdProduct();

        $priceProductPriceListPageSearchTransfer = $this->sanitize(
            $priceProductPriceListPageSearchTransfer
        );

        $priceProductPriceListPageSearchTransfer = $this->expandWithWhitelistIds(
            $priceProductPriceListPageSearchTransfer
        );

        $priceProductPriceListPageSearchTransfer = $this->expandWithBlacklistIds(
            $priceProductPriceListPageSearchTransfer
        );

        return $priceProductPriceListPageSearchTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer
     */
    protected function sanitize(
        PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
    ): PriceProductPriceListPageSearchTransfer {
        if ($priceProductPriceListPageSearchTransfer->getProductListMap() === null) {
            $priceProductPriceListPageSearchTransfer->setProductListMap(new ProductListMapTransfer());
        }

        return $priceProductPriceListPageSearchTransfer;
    }
}
