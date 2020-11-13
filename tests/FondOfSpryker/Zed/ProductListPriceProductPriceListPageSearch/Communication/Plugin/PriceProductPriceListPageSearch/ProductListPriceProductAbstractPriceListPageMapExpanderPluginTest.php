<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface;

class ProductListPriceProductAbstractPriceListPageMapExpanderPluginTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\PageMapTransfer
     */
    protected $pageMapTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface
     */
    protected $pageMapBuilderInterfaceMock;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\LocaleTransfer
     */
    protected $localeTransferMock;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Communication\Plugin\PriceProductPriceListPageSearch\ProductListPriceProductAbstractPriceListPageMapExpanderPlugin
     */
    protected $productListPriceProductAbstractPriceListPageMapExpanderPlugin;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->pageMapTransferMock = $this->getMockBuilder(PageMapTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->pageMapBuilderInterfaceMock = $this->getMockBuilder(PageMapBuilderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->data = [
            'productListMap' => [],
        ];

        $this->localeTransferMock = $this->getMockBuilder(LocaleTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productListPriceProductAbstractPriceListPageMapExpanderPlugin = new ProductListPriceProductAbstractPriceListPageMapExpanderPlugin();
    }

    /**
     * @return void
     */
    public function testExpand(): void
    {
        $this->pageMapTransferMock->expects(self::atLeastOnce())
            ->method('setProductLists')
            ->willReturnSelf();

        self::assertEquals(
            $this->pageMapTransferMock,
            $this->productListPriceProductAbstractPriceListPageMapExpanderPlugin->expand(
                $this->pageMapTransferMock,
                $this->pageMapBuilderInterfaceMock,
                $this->data,
                $this->localeTransferMock
            )
        );
    }

    /**
     * @return void
     */
    public function testExpandEmpty(): void
    {
        self::assertEquals(
            $this->pageMapTransferMock,
            $this->productListPriceProductAbstractPriceListPageMapExpanderPlugin->expand(
                $this->pageMapTransferMock,
                $this->pageMapBuilderInterfaceMock,
                [],
                $this->localeTransferMock
            )
        );
    }
}
