<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{

    public function indexAction(Request $request, $urlname)
    {
        $data = [];
        $template = 'profile/index.html.twig';


        return $this->render($template, $data);
    }
}
