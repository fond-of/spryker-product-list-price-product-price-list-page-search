<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductAbstractPriceListPageSearchExpander;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\Model\PriceProductConcretePriceListPageSearchExpander;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface;
use FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\ProductListPriceProductPriceListPageSearchDependencyProvider;
use Spryker\Zed\Kernel\Container;

class ProductListPriceProductPriceListPageSearchBusinessFactoryTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\Kernel\Container
     */
    protected $containerMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToProductListFacadeInterface
     */
    protected $productListFacadeMock;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Business\ProductListPriceProductPriceListPageSearchBusinessFactory
     */
    protected $productListPriceProductPriceListPageSearchBusinessFactory;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productListFacadeMock = $this->getMockBuilder(ProductListPriceProductPriceListPageSearchToProductListFacadeInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productListPriceProductPriceListPageSearchBusinessFactory = new ProductListPriceProductPriceListPageSearchBusinessFactory();
        $this->productListPriceProductPriceListPageSearchBusinessFactory->setContainer($this->containerMock);
    }

    /**
     * @return void
     */
    public function testCreatePriceProductAbstractPriceListPageSearchExpander(): void
    {
        $this->containerMock->expects(self::atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects(self::atLeastOnce())
            ->method('get')
            ->with(ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRODUCT_LIST)
            ->willReturn($this->productListFacadeMock);

        self::assertInstanceOf(
            PriceProductAbstractPriceListPageSearchExpander::class,
            $this->productListPriceProductPriceListPageSearchBusinessFactory->createPriceProductAbstractPriceListPageSearchExpander()
        );
    }

    /**
     * @return void
     */
    public function testCreatePriceProductConcretePriceListPageSearchExpander(): void
    {
        $this->containerMock->expects(self::atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects(self::atLeastOnce())
            ->method('get')
            ->with(ProductListPriceProductPriceListPageSearchDependencyProvider::FACADE_PRODUCT_LIST)
            ->willReturn($this->productListFacadeMock);

        self::assertInstanceOf(
            PriceProductConcretePriceListPageSearchExpander::class,
            $this->productListPriceProductPriceListPageSearchBusinessFactory->createPriceProductConcretePriceListPageSearchExpander()
        );
    }
}
