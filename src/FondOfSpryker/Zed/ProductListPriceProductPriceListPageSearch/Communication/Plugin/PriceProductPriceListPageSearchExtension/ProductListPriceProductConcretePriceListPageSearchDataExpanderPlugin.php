<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearchExtension;

use FondOfSpryker\Zed\PriceProductPriceListPageSearchExtension\Dependency\Plugin\PriceProductConcretePriceListPageSearchDataExpanderPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\ProductListPriceProductPriceListPageSearchCommunicationFactory getFactory()
 */
class ProductListPriceProductConcretePriceListPageSearchDataExpanderPlugin extends AbstractPlugin implements PriceProductConcretePriceListPageSearchDataExpanderPluginInterface
{
    protected const DATA_KEY_PRODUCT_LIST_MAP = 'product_list_map';

    protected const SEARCH_DATA_KEY_PRODUCT_LISTS = 'product-lists';

    /**
     * @param array $data
     * @param array $searchData
     *
     * @return array
     */
    public function expand(array $data, array $searchData): array
    {
        if (!isset($data[static::DATA_KEY_PRODUCT_LIST_MAP])) {
            return $searchData;
        }

        $searchData[static::SEARCH_DATA_KEY_PRODUCT_LISTS] = $data[static::DATA_KEY_PRODUCT_LIST_MAP];

        return $searchData;
    }
}
