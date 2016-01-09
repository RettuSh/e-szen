<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of LuckyController
 *
 * @author Krzysiu
 */
class LuckyController extends Controller {
    
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('@AppBundle/views/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
