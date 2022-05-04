<?php

declare(strict_types=1);

namespace Biere\BiereFf\Controller;


/**
 * This file is part of the "Biere" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Florian Finot <flofinot2001@gmail.com>, IUT bdx
 */

/**
 * CountryController
 */
class CountryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action search
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function searchAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
