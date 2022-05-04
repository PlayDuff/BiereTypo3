<?php

declare(strict_types=1);

namespace Biere\BiereFf\Domain\Model;


/**
 * This file is part of the "Biere" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Florian Finot <flofinot2001@gmail.com>, IUT bdx
 */

/**
 * Biere
 */
class Biere extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * picture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $picture = null;

    /**
     * taste
     *
     * @var string
     */
    protected $taste = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * degree
     *
     * @var int
     */
    protected $degree = 0;

    /**
     * brand
     *
     * @var \Biere\BiereFf\Domain\Model\Brand
     */
    protected $brand = null;

    /**
     * type
     *
     * @var \Biere\BiereFf\Domain\Model\Type
     */
    protected $type = null;

    /**
     * ingredient
     *
     * @var \Biere\BiereFf\Domain\Model\Ingredient
     */
    protected $ingredient = null;

    /**
     * country
     *
     * @var \Biere\BiereFf\Domain\Model\Country
     */
    protected $country = null;

    /**
     * review
     *
     * @var \Biere\BiereFf\Domain\Model\Review
     */
    protected $review = null;

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the picture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the picture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $picture
     * @return void
     */
    public function setPicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $picture)
    {
        $this->picture = $picture;
    }

    /**
     * Returns the taste
     *
     * @return string
     */
    public function getTaste()
    {
        return $this->taste;
    }

    /**
     * Sets the taste
     *
     * @param string $taste
     * @return void
     */
    public function setTaste(string $taste)
    {
        $this->taste = $taste;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the degree
     *
     * @return int
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     *
     * @param int $degree
     * @return void
     */
    public function setDegree(int $degree)
    {
        $this->degree = $degree;
    }

    /**
     * Returns the brand
     *
     * @return \Biere\BiereFf\Domain\Model\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     *
     * @param \Biere\BiereFf\Domain\Model\Brand $brand
     * @return void
     */
    public function setBrand(\Biere\BiereFf\Domain\Model\Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns the type
     *
     * @return \Biere\BiereFf\Domain\Model\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \Biere\BiereFf\Domain\Model\Type $type
     * @return void
     */
    public function setType(\Biere\BiereFf\Domain\Model\Type $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the ingredient
     *
     * @return \Biere\BiereFf\Domain\Model\Ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets the ingredient
     *
     * @param \Biere\BiereFf\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function setIngredient(\Biere\BiereFf\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * Returns the country
     *
     * @return \Biere\BiereFf\Domain\Model\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param \Biere\BiereFf\Domain\Model\Country $country
     * @return void
     */
    public function setCountry(\Biere\BiereFf\Domain\Model\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Returns the review
     *
     * @return \Biere\BiereFf\Domain\Model\Review
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Sets the review
     *
     * @param \Biere\BiereFf\Domain\Model\Review $review
     * @return void
     */
    public function setReview(\Biere\BiereFf\Domain\Model\Review $review)
    {
        $this->review = $review;
    }
}
