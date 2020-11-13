<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Dependency\Plugin\PriceProductAbstractPriceListPageDataExpanderPluginInterface;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 */
class ProductListPriceProductAbstractPriceListPageDataExpanderPlugin extends AbstractPlugin implements PriceProductAbstractPriceListPageDataExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer
     */
    public function expand(
        PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
    ): PriceProductPriceListPageSearchTransfer {
        return $this->getFacade()->expandPriceProductAbstractPriceListPageSearchWithProductLists(
            $priceProductPriceListPageSearchTransfer
        );
    }
}
