<?php

namespace AppBundle\Controller;

use Pimcore\Model\DataObject\Jobs;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Zend\Paginator\Paginator;

class JobsController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable twig view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }

    public function indexAction(Request $request)
    {
        // get a list of news objects and order them by date
        $jobsList = new Jobs\Listing();
        $jobsList->setOrderKey('Datum');
        $jobsList->setOrder('DESC');

        $paginator = new Paginator($jobsList);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(5);

        $this->view->jobs = $paginator;
    }

    public function detailAction(Request $request)
    {
        // alternatively type hint the method with $id to get the route match injected
        $id = $request->get('id');

        // "id" is the named parameters in "Static Routes"
        $jobs = Jobs::getById($id);

        if (!$jobs instanceof Jobs || !$jobs->isPublished()) {
            // this will trigger a 404 error response
            throw $this->createNotFoundException('Invalid request');
        }

        $this->view->jobs = $jobs;
    }
}
