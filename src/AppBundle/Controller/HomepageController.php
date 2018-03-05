<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\MyFormType;

class HomepageController  extends Controller
{
	/**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        

        return $this->render('homepage/homepage.html.twig');
    }
}