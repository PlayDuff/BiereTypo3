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
class BrandControllerTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Controller\BrandController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Biere\BiereFf\Controller\BrandController::class))
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
    public function listActionFetchesAllBrandsFromRepositoryAndAssignsThemToView(): void
    {
        $allBrands = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $brandRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $brandRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBrands));
        $this->subject->_set('brandRepository', $brandRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('brands', $allBrands);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }
}
