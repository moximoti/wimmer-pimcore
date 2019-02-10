<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pimcore\Model\Asset;

class WidefaultController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable twig view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }

    public function defaultAction(Request $request)
    {
    	// Standardseite bestehend aus Head, Lead, Wysiwyg.
    }

    public function galleryAction(Request $request)
    {
    	// Bildergallerie aus Ordner. Mit custom Head Text.
    	// try to get the tag where the parent folder is specified

        $parentFolder = $this->document->getElement('parentFolder');
        if ($parentFolder) {
            $parentFolder = $parentFolder->getElement();
        }

        if (!$parentFolder) {
            // default is the home folder
            $parentFolder = Asset::getById(1);
        }

        // get all children of the parent
        $list = new Asset\Listing();
        $list->setCondition('path like ?', $parentFolder->getFullpath() . '%');

        $this->view->list = $list;
    }

    /*
    public function customAction(Request $request)
    {
    	// Frei zusammenbaubar mit Inhaltsmodulen
    }
    public function startpageAction(Request $request)
    {
    	// Fest konfigurierte Startseite. Bild muss austauschbar sein, kann evtl auch Video sein.
    }
    public function mapAction(Request $request)
    {
    	// Map im Headerbereich. (Zusammenlegen mit AdvancedController/contactAction)
    }
    */
}
