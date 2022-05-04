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
class ThemeTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Domain\Model\Theme|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Biere\BiereFf\Domain\Model\Theme::class,
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
    public function getTitreReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitre()
        );
    }

    /**
     * @test
     */
    public function setTitreForStringSetsTitre(): void
    {
        $this->subject->setTitre('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('titre'));
    }

    /**
     * @test
     */
    public function getDateDebutReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDateDebut()
        );
    }

    /**
     * @test
     */
    public function setDateDebutForDateTimeSetsDateDebut(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateDebut($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('dateDebut'));
    }

    /**
     * @test
     */
    public function getDateFinReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDateFin()
        );
    }

    /**
     * @test
     */
    public function setDateFinForDateTimeSetsDateFin(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateFin($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('dateFin'));
    }
}
