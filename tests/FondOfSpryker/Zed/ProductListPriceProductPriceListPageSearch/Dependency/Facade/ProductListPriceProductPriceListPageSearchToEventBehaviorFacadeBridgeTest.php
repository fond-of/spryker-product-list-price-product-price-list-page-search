<?php

namespace FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\ProductListConditionalAvailabilityPageSearch\Dependency\Facade\ProductListConditionalAvailabilityPageSearchToEventBehaviorFacadeBridge;
use Generated\Shared\Transfer\EventEntityTransfer;
use Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface;

class ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeBridgeTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\EventBehavior\Business\EventBehaviorFacadeInterface
     */
    protected $eventBehaviorFacadeMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject[]|\Generated\Shared\Transfer\EventEntityTransfer[]
     */
    protected $eventTransfers;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\EventEntityTransfer
     */
    protected $eventEntityTransferMock;

    /**
     * @var string
     */
    protected $foreignKeyColumnName;

    /**
     * @var \FondOfSpryker\Zed\ProductListPriceProductPriceListPageSearch\Dependency\Facade\ProductListPriceProductPriceListPageSearchToEventBehaviorFacadeBridge
     */
    protected $productListPriceProductPriceListPageSearchToEventBehaviorFacadeBridge;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->eventBehaviorFacadeMock = $this->getMockBuilder(EventBehaviorFacadeInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->eventEntityTransferMock = $this->getMockBuilder(EventEntityTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->eventTransfers = [
            $this->eventEntityTransferMock,
        ];

        $this->foreignKeyColumnName = 'foreign-key-column-name';

        $this->productListPriceProductPriceListPageSearchToEventBehaviorFacadeBridge = new ProductListConditionalAvailabilityPageSearchToEventBehaviorFacadeBridge(
            $this->eventBehaviorFacadeMock
        );
    }

    /**
     * @return void
     */
    public function testGetEventTransferForeignKeys(): void
    {
        $this->eventBehaviorFacadeMock->expects(self::atLeastOnce())
            ->method('getEventTransferForeignKeys')
            ->with($this->eventTransfers, $this->foreignKeyColumnName)
            ->willReturn([]);

        self::assertIsArray(
            $this->productListPriceProductPriceListPageSearchToEventBehaviorFacadeBridge->getEventTransferForeignKeys(
                $this->eventTransfers,
                $this->foreignKeyColumnName
            )
        );
    }
}
