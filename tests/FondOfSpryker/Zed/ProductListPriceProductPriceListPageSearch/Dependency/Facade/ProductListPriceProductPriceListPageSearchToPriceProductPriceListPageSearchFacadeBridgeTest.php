<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\PriceProductPriceListPageSearch\Business\PriceProductPriceListPageSearchFacadeInterface;

class ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridgeTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\PriceProductPriceListPageSearch\Business\PriceProductPriceListPageSearchFacadeInterface
     */
    protected $priceProductPriceListPageSearchFacadeMock;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge
     */
    protected $productListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->priceProductPriceListPageSearchFacadeMock = $this->getMockBuilder(PriceProductPriceListPageSearchFacadeInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge =
            new ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge(
                $this->priceProductPriceListPageSearchFacadeMock
            );
    }

    /**
     * @return void
     */
    public function testPublishAbstractPriceProductByByProductAbstractIds(): void
    {
        $productAbstractIds = [1, 3, 5];

        $this->priceProductPriceListPageSearchFacadeMock->expects(self::atLeastOnce())
            ->method('publishAbstractPriceProductByByProductAbstractIds')
            ->with($productAbstractIds);

        $this->productListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge
            ->publishAbstractPriceProductByByProductAbstractIds($productAbstractIds);
    }

    /**
     * @return void
     */
    public function testPublishConcretePriceProductByByProductIds(): void
    {
        $productIds = [2, 4, 6];

        $this->priceProductPriceListPageSearchFacadeMock->expects(self::atLeastOnce())
            ->method('publishConcretePriceProductByProductIds')
            ->with($productIds);

        $this->productListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeBridge
            ->publishConcretePriceProductByProductIds($productIds);
    }
}
