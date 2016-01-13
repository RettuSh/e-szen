<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $data = [];
        $user = $this->getUser();

        if ($user) {
            // return $this->redirectToRoute('profile_urlname');
            // return new RedirectResponse($this->generateUrl('profile_urlname'));
            // return new RedirectResponse($this->generateUrl('profile_urlname', array('urlname' => $user->getUrlname())));
            return $this->forward('AppBundle:Profile:index', ['urlname' => $user->getUrlname(),]);
        }

        $template = 'default/index.html.twig';

        // replace this example code with whatever you need
        return $this->render($template, $data);
    }
}
