<?php

declare(strict_types=1);

namespace Biere\BiereFf\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Florian <flofinot2001@gmail.com>
 */
class BeerControllerTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Controller\BeerController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Biere\BiereFf\Controller\BeerController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllBeersFromRepositoryAndAssignsThemToView(): void
    {
        $allBeers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $beerRepository = $this->getMockBuilder(\Biere\BiereFf\Domain\Repository\BeerRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $beerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBeers));
        $this->subject->_set('beerRepository', $beerRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('beers', $allBeers);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBeerToView(): void
    {
        $beer = new \Biere\BiereFf\Domain\Model\Beer();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('beer', $beer);

        $this->subject->showAction($beer);
    }
}
