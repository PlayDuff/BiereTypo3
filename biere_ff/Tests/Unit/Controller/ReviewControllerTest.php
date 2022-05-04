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
class ReviewControllerTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Controller\ReviewController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Biere\BiereFf\Controller\ReviewController::class))
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
    public function createActionAddsTheGivenReviewToReviewRepository(): void
    {
        $review = new \Biere\BiereFf\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->onlyMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->subject->_set('reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
