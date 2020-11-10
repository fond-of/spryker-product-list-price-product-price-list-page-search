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
     * @param array $data
     * @param \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
     *
     * @return void
     */
    public function expand(
        array $data,
        PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
    ): void {
        $this->getFacade()->expandPriceProductAbstractPriceListPageSearchWithProductLists(
            $priceProductPriceListPageSearchTransfer
        );
    }
}
