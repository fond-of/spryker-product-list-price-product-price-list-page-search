<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacade;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class ProductListPriceProductConcretePriceListPageDataExpanderPluginTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacade
     */
    protected $productListPriceProductPriceListPageSearchFacadeMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer
     */
    protected $priceProductPriceListPageSearchTransferTransferMock;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch\ProductListPriceProductConcretePriceListPageDataExpanderPlugin
     */
    protected $productListPriceProductConcretePriceListPageDataExpanderPlugin;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->productListPriceProductPriceListPageSearchFacadeMock = $this->getMockBuilder(ProductListPriceProductPriceListPageSearchFacade::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->priceProductPriceListPageSearchTransferTransferMock = $this->getMockBuilder(PriceProductPriceListPageSearchTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productListPriceProductConcretePriceListPageDataExpanderPlugin = new class (
            $this->productListPriceProductPriceListPageSearchFacadeMock
        ) extends ProductListPriceProductConcretePriceListPageDataExpanderPlugin {
            /**
             * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacade
             */
            protected $productListPriceProductPriceListPageSearchFacade;

            /**
             * @param \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacade $productListPriceProductPriceListPageSearchFacade
             */
            public function __construct(
                ProductListPriceProductPriceListPageSearchFacade $productListPriceProductPriceListPageSearchFacade
            ) {
                $this->productListPriceProductPriceListPageSearchFacade = $productListPriceProductPriceListPageSearchFacade;
            }

            /**
             * @return \Spryker\Zed\Kernel\Business\AbstractFacade
             */
            public function getFacade(): AbstractFacade
            {
                return $this->productListPriceProductPriceListPageSearchFacade;
            }
        };
    }

    /**
     * @return void
     */
    public function testExpand(): void
    {
        $this->productListPriceProductPriceListPageSearchFacadeMock->expects(self::atLeastOnce())
            ->method('expandPriceProductConcretePriceListPageSearchWithProductLists')
            ->with($this->priceProductPriceListPageSearchTransferTransferMock)
            ->willReturn($this->priceProductPriceListPageSearchTransferTransferMock);

        $this->productListPriceProductConcretePriceListPageDataExpanderPlugin->expand(
            $this->priceProductPriceListPageSearchTransferTransferMock
        );
    }
}
