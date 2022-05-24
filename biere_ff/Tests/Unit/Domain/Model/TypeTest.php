<?php

declare(strict_types=1);

namespace Biere\BiereFf\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Florian <flofinot2001@gmail.com>
 */
class TypeTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Domain\Model\Type|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Biere\BiereFf\Domain\Model\Type::class,
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
    public function getTypeReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForStringSetsType(): void
    {
        $this->subject->setType('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('type'));
    }
}
