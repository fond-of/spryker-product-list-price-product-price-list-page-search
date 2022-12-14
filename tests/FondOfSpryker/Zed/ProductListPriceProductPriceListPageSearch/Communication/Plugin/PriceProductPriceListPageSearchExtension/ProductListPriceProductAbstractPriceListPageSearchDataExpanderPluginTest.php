<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearchExtension;

use Codeception\Test\Unit;

class ProductListPriceProductAbstractPriceListPageSearchDataExpanderPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearchExtension\ProductListPriceProductAbstractPriceListPageSearchDataExpanderPlugin
     */
    protected $productListPriceProductAbstractPriceListPageSearchDataExpanderPlugin;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var array
     */
    protected $productListMap;

    /**
     * @var array
     */
    protected $searchData;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->productListMap = [
            'blacklists' => [],
            'whitelists' => [1],
        ];

        $this->data = [
            'product_list_map' => $this->productListMap,
        ];

        $this->searchData = [];

        $this->productListPriceProductAbstractPriceListPageSearchDataExpanderPlugin = new ProductListPriceProductAbstractPriceListPageSearchDataExpanderPlugin();
    }

    /**
     * @return void
     */
    public function testExpand(): void
    {
        $searchData = $this->productListPriceProductAbstractPriceListPageSearchDataExpanderPlugin
            ->expand($this->data, $this->searchData);

        self::assertArrayHasKey('product-lists', $searchData);
        self::assertEquals($this->productListMap, $searchData['product-lists']);
    }

    /**
     * @return void
     */
    public function testExpandEmpty(): void
    {
        $searchData = $this->productListPriceProductAbstractPriceListPageSearchDataExpanderPlugin
            ->expand([], $this->searchData);

        self::assertArrayNotHasKey('product-lists', $searchData);
    }
}
