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
 * Review
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * content
     *
     * @var string
     */
    protected $content = '';

    /**
     * note
     *
     * @var int
     */
    protected $note = 0;

    /**
     * user
     *
     * @var string
     */
    protected $user = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * checked
     *
     * @var bool
     */
    protected $checked = false;

    /**
     * Returns the content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     *
     * @param string $content
     * @return void
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * Returns the note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the note
     *
     * @param int $note
     * @return void
     */
    public function setNote(int $note)
    {
        $this->note = $note;
    }

    /**
     * Returns the user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     *
     * @param string $user
     * @return void
     */
    public function setUser(string $user)
    {
        $this->user = $user;
    }

    /**
     * Returns the date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the checked
     *
     * @return bool
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * Sets the checked
     *
     * @param bool $checked
     * @return void
     */
    public function setChecked(bool $checked)
    {
        $this->checked = $checked;
    }

    /**
     * Returns the boolean state of checked
     *
     * @return bool
     */
    public function isChecked()
    {
        return $this->checked;
    }
}
