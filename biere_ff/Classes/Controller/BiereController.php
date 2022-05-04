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
 * BiereController
 */
class BiereController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * biereRepository
     *
     * @var \Biere\BiereFf\Domain\Repository\BiereRepository
     */
    protected $biereRepository = null;

    /**
     * @param \Biere\BiereFf\Domain\Repository\BiereRepository $biereRepository
     */
    public function injectBiereRepository(\Biere\BiereFf\Domain\Repository\BiereRepository $biereRepository)
    {
        $this->biereRepository = $biereRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $bieres = $this->biereRepository->findAll();
        $this->view->assign('bieres', $bieres);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Biere\BiereFf\Domain\Model\Biere $biere
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Biere\BiereFf\Domain\Model\Biere $biere): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('biere', $biere);
        return $this->htmlResponse();
    }

    /**
     * action search
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function searchAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action focus
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function focusAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
