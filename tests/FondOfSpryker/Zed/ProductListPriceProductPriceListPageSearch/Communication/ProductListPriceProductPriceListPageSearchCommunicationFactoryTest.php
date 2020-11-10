<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\ProductListPriceProductPriceListPageSearchDependencyProvider;
use Spryker\Zed\Kernel\Container;

class ProductListPriceProductPriceListPageSearchCommunicationFactoryTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\Kernel\Container
     */
    protected $containerMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductFacadeInterface
     */
    protected $productFacadeMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface
     */
    protected $eventBehaviorFacadeMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface
     */
    protected $priceProductPriceListPageSearchFacadeMock;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\ProductListPriceProductPriceListPageSearchCommunicationFactory
     */
    protected $productListPriceProductPriceListPageSearchCommunicationFactory;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productFacadeMock = $this->getMockBuilder(
            ProductListPriceProductPriceListPageSearchToProductFacadeInterface::class
        )->disableOriginalConstructor()->getMock();

        $this->eventBehaviorFacadeMock = $this->getMockBuilder(
            ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeInterface::class
        )->disableOriginalConstructor()->getMock();

        $this->priceProductPriceListPageSearchFacadeMock = $this->getMockBuilder(
            ProductListPriceProductPriceListPageSearchToPriceProductPriceListPageSearchFacadeInterface::class
        )->disableOriginalConstructor()->getMock();

        $this->productListPriceProductPriceListPageSearchCommunicationFactory = new ProductListPriceProductPriceListPageSearchCommunicationFactory();
        $this->productListPriceProductPriceListPageSearchCommunicationFactory->setContainer($this->containerMock);
    }

    /**
     * @return void
     */
    public function testGetEventBehaviorFacade(): void
    {
        $this->containerMock->expects(self::atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects(self::atLeastOnce())
            ->method('get')
            ->with(ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_EVENT_BEHAVIOR)
            ->willReturn($this->eventBehaviorFacadeMock);

        self::assertEquals(
            $this->eventBehaviorFacadeMock,
            $this->productListPriceProductPriceListPageSearchCommunicationFactory->getEventBehaviorFacade()
        );
    }

    /**
     * @return void
     */
    public function testGetProductFacade(): void
    {
        $this->containerMock->expects(self::atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects(self::atLeastOnce())
            ->method('get')
            ->with(ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRODUCT)
            ->willReturn($this->productFacadeMock);

        self::assertEquals(
            $this->productFacadeMock,
            $this->productListPriceProductPriceListPageSearchCommunicationFactory->getProductFacade()
        );
    }

    /**
     * @return void
     */
    public function testGetPriceProductPriceListPageSearchFacade(): void
    {
        $this->containerMock->expects(self::atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects(self::atLeastOnce())
            ->method('get')
            ->with(ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRICE_PRODUCT_PRICE_LIST_PAGE_SEARCH)
            ->willReturn($this->priceProductPriceListPageSearchFacadeMock);

        self::assertEquals(
            $this->priceProductPriceListPageSearchFacadeMock,
            $this->productListPriceProductPriceListPageSearchCommunicationFactory->getPriceProductPriceListPageSearchFacade()
        );
    }
}
