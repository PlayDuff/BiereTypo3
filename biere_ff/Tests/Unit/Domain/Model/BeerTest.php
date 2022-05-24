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
class BeerTest extends UnitTestCase
{
    /**
     * @var \Biere\BiereFf\Domain\Model\Beer|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Biere\BiereFf\Domain\Model\Beer::class,
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
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('image'));
    }

    /**
     * @test
     */
    public function getTasteReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTaste()
        );
    }

    /**
     * @test
     */
    public function setTasteForStringSetsTaste(): void
    {
        $this->subject->setTaste('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('taste'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getDegreeReturnsInitialValueForFloat(): void
    {
        self::assertSame(
            0.0,
            $this->subject->getDegree()
        );
    }

    /**
     * @test
     */
    public function setDegreeForFloatSetsDegree(): void
    {
        $this->subject->setDegree(3.14159265);

        self::assertEquals(3.14159265, $this->subject->_get('degree'));
    }

    /**
     * @test
     */
    public function getBrandReturnsInitialValueForBrand(): void
    {
        self::assertEquals(
            null,
            $this->subject->getBrand()
        );
    }

    /**
     * @test
     */
    public function setBrandForBrandSetsBrand(): void
    {
        $brandFixture = new \Biere\BiereFf\Domain\Model\Brand();
        $this->subject->setBrand($brandFixture);

        self::assertEquals($brandFixture, $this->subject->_get('brand'));
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForType(): void
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForTypeSetsType(): void
    {
        $typeFixture = new \Biere\BiereFf\Domain\Model\Type();
        $this->subject->setType($typeFixture);

        self::assertEquals($typeFixture, $this->subject->_get('type'));
    }

    /**
     * @test
     */
    public function getIngredientReturnsInitialValueForIngredient(): void
    {
        self::assertEquals(
            null,
            $this->subject->getIngredient()
        );
    }

    /**
     * @test
     */
    public function setIngredientForIngredientSetsIngredient(): void
    {
        $ingredientFixture = new \Biere\BiereFf\Domain\Model\Ingredient();
        $this->subject->setIngredient($ingredientFixture);

        self::assertEquals($ingredientFixture, $this->subject->_get('ingredient'));
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForCountry(): void
    {
        self::assertEquals(
            null,
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForCountrySetsCountry(): void
    {
        $countryFixture = new \Biere\BiereFf\Domain\Model\Country();
        $this->subject->setCountry($countryFixture);

        self::assertEquals($countryFixture, $this->subject->_get('country'));
    }

    /**
     * @test
     */
    public function getReviewReturnsInitialValueForReview(): void
    {
        self::assertEquals(
            null,
            $this->subject->getReview()
        );
    }

    /**
     * @test
     */
    public function setReviewForReviewSetsReview(): void
    {
        $reviewFixture = new \Biere\BiereFf\Domain\Model\Review();
        $this->subject->setReview($reviewFixture);

        self::assertEquals($reviewFixture, $this->subject->_get('review'));
    }
}
