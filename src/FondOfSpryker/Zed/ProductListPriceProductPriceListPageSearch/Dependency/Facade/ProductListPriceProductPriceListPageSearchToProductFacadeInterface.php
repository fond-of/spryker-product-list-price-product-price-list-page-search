<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade;

interface ProductListPriceProductPriceListPageSearchToProductFacadeInterface
{
    /**
     * @param int[] $productConcreteIds
     *
     * @return int[]
     */
    public function getProductAbstractIdsByProductConcreteIds(array $productConcreteIds): array;
}
