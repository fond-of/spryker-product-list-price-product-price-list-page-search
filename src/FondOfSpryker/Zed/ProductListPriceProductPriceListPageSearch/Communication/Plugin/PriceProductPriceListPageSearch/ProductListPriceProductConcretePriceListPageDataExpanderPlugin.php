<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Dependency\Plugin\PriceProductConcretePriceListPageDataExpanderPluginInterface;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\ProductListPriceProductPriceListPageSearchCommunicationFactory getFactory()
 */
class ProductListPriceProductConcretePriceListPageDataExpanderPlugin extends AbstractPlugin implements PriceProductConcretePriceListPageDataExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer
     */
    public function expand(
        PriceProductPriceListPageSearchTransfer $priceProductPriceListPageSearchTransfer
    ): PriceProductPriceListPageSearchTransfer {
        return $this->getFacade()->expandPriceProductConcretePriceListPageSearchWithProductLists(
            $priceProductPriceListPageSearchTransfer
        );
    }
}
