<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchFacade;
use Generated\Shared\Transfer\PriceProductPriceListPageSearchTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class ProductListPriceProductAbstractPriceListPageDataExpanderPluginTest extends Unit
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
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch\ProductListPriceProductAbstractPriceListPageDataExpanderPlugin
     */
    protected $productListPriceProductAbstractPriceListPageDataExpanderPlugin;

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

        $this->productListPriceProductAbstractPriceListPageDataExpanderPlugin = new class (
            $this->productListPriceProductPriceListPageSearchFacadeMock
        ) extends ProductListPriceProductAbstractPriceListPageDataExpanderPlugin {
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
            ->method('expandPriceProductAbstractPriceListPageSearchWithProductLists')
            ->with($this->priceProductPriceListPageSearchTransferTransferMock)
            ->willReturn($this->priceProductPriceListPageSearchTransferTransferMock);

        $this->productListPriceProductAbstractPriceListPageDataExpanderPlugin->expand(
            $this->priceProductPriceListPageSearchTransferTransferMock
        );
    }
}
