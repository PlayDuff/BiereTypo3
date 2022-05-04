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
 * Theme
 */
class Theme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * titre
     *
     * @var string
     */
    protected $titre = '';

    /**
     * dateDebut
     *
     * @var \DateTime
     */
    protected $dateDebut = null;

    /**
     * dateFin
     *
     * @var \DateTime
     */
    protected $dateFin = null;

    /**
     * Returns the titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Sets the titre
     *
     * @param string $titre
     * @return void
     */
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    /**
     * Returns the dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Sets the dateDebut
     *
     * @param \DateTime $dateDebut
     * @return void
     */
    public function setDateDebut(\DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Returns the dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Sets the dateFin
     *
     * @param \DateTime $dateFin
     * @return void
     */
    public function setDateFin(\DateTime $dateFin)
    {
        $this->dateFin = $dateFin;
    }
}
