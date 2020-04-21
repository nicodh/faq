<?php
/**
 * VoteViewHelper.php
 *
 * @package    Hdnet
 * @author     Tim Spiekerkoetter
 */

namespace HDNET\Faq\ViewHelpers\Widget;

/**
 * VoteViewHelper
 *
 * @author     Tim Spiekerkoetter
 */
class VoteViewHelper extends AbstractWidgetViewHelper
{

    /**
     * AJAX Widget?
     *
     * @var bool
     */
    protected $ajaxWidget = true;

    /**
     * Controller
     *
     * @var \HDNET\Faq\ViewHelpers\Widget\Controller\VoteController
     * @inject
     */
    protected $controller;

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('question', 'int', 'Question ID');
        $this->registerArgument('counters', 'array', 'Counter', false, '');
    }

    /**
     * Render
     *
     * @return \TYPO3\CMS\Extbase\Mvc\ResponseInterface
     * @throws \TYPO3\CMS\Fluid\Core\Widget\Exception\MissingControllerException
     */
    public function render()
    {
        return $this->initiateSubRequest();
    }
}
