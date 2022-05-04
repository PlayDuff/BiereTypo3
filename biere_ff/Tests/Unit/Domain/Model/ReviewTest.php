<?php

declare(strict_types=1);

namespace Biere\BiereFf\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Florian Finot <flofinot2001@gmail.com>
 */
class ReviewTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Domain\Model\Review|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Biere\BiereFf\Domain\Model\Review::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getContentReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getContent()
        );
    }

    /**
     * @test
     */
    public function setContentForStringSetsContent(): void
    {
        $this->subject->setContent('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('content'));
    }

    /**
     * @test
     */
    public function getNoteReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getNote()
        );
    }

    /**
     * @test
     */
    public function setNoteForIntSetsNote(): void
    {
        $this->subject->setNote(12);

        self::assertEquals(12, $this->subject->_get('note'));
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getUser()
        );
    }

    /**
     * @test
     */
    public function setUserForStringSetsUser(): void
    {
        $this->subject->setUser('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('user'));
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('date'));
    }

    /**
     * @test
     */
    public function getCheckedReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getChecked());
    }

    /**
     * @test
     */
    public function setCheckedForBoolSetsChecked(): void
    {
        $this->subject->setChecked(true);

        self::assertEquals(true, $this->subject->_get('checked'));
    }
}
