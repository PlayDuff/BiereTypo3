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
 * @author Florian Finot <flofinot2001@gmail.com>
 */
class BiereControllerTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Controller\BiereController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Biere\BiereFf\Controller\BiereController::class))
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
    public function listActionFetchesAllBieresFromRepositoryAndAssignsThemToView(): void
    {
        $allBieres = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $biereRepository = $this->getMockBuilder(\Biere\BiereFf\Domain\Repository\BiereRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $biereRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBieres));
        $this->subject->_set('biereRepository', $biereRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bieres', $allBieres);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBiereToView(): void
    {
        $biere = new \Biere\BiereFf\Domain\Model\Biere();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('biere', $biere);

        $this->subject->showAction($biere);
    }
}
