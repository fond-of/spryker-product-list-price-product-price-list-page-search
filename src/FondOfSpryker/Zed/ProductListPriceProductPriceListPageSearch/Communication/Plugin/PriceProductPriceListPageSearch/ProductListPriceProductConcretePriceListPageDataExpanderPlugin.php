<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Dependency\Plugin\PriceProductConcretePriceListPageDataExpanderPluginInterface;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 */
class ProductListPriceProductConcretePriceListPageDataExpanderPlugin extends AbstractPlugin implements PriceProductConcretePriceListPageDataExpanderPluginInterface
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
        $this->getFacade()->expandPriceProductConcretePriceListPageSearchWithProductLists(
            $priceProductPriceListPageSearchTransfer
        );
    }
}
