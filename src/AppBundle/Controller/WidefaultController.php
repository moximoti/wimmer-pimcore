<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WidefaultController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable twig view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }
    public function defaultAction(Request $request)
    {
    }
}
