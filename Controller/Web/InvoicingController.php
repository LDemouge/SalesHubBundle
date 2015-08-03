<?php

namespace Exxan\Sgv3\SalesHubBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
#use Exxan\Sgv3\SalesHubBundle\Controller\DefaultController;

/**
 * @Route("/SalesHub/invoicing")
 */


class InvoicingController extends Controller
{
    /**
	 * @Route("/", name="sgv3_sales_invoicing")
	 */	
		
    public function indexAction()
    {
        return new Response("ça c'est fait");
    }
}
