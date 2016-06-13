<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 25-5-16
 * Time: 14:23
 */

namespace StoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class showController
{
    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return new Response("test responce!!!!!!!!");
    }
}