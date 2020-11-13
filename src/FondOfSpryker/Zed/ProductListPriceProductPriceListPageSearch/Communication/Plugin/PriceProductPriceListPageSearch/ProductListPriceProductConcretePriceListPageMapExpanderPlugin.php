<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Dependency\Plugin\PriceProductConcretePriceListPageMapExpanderPluginInterface;
use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Generated\Shared\Transfer\ProductListMapTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\ProductListPriceProductPriceListPageSearchCommunicationFactory getFactory()
 */
class ProductListPriceProductConcretePriceListPageMapExpanderPlugin extends AbstractPlugin implements PriceProductConcretePriceListPageMapExpanderPluginInterface
{
    protected const DATA_KEY_PRODUCT_LIST_MAP = 'productListMap';

    /**
     * @param \Generated\Shared\Transfer\PageMapTransfer $pageMapTransfer
     * @param \Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface $pageMapBuilder
     * @param array $productData
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    public function expand(
        PageMapTransfer $pageMapTransfer,
        PageMapBuilderInterface $pageMapBuilder,
        array $productData,
        LocaleTransfer $localeTransfer
    ): PageMapTransfer {
        if (!isset($productData[static::DATA_KEY_PRODUCT_LIST_MAP])) {
            return $pageMapTransfer;
        }

        $productListMapTransfer = (new ProductListMapTransfer())
            ->fromArray($productData[static::DATA_KEY_PRODUCT_LIST_MAP]);

        return $pageMapTransfer->setProductLists($productListMapTransfer);
    }
}
