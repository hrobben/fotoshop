<?php

namespace StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use StoreBundle\Entity\Articles;
use StoreBundle\Form\ArticlesType;

/**
 * Cart controller, using sessions
 *
 * @Route("/cart")
 */
class CartController extends Controller
{
    /**
     * @Route("/", name="cart")
     */
    public function indexAction()
    {
        // get the cart from  the session
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        // $cart = $session->set('cart', '');
        $cart = $session->get('cart', array());

        // $cart = array_keys($cart);
        // print_r($cart); die;

        // fetch the information using query and ids in the cart
        if ($cart != '') {

            if (isset($cart)) {
                $em = $this->getDoctrine()->getEntityManager();
                $product = $em->getRepository('StoreBundle:Articles')->findById($cart);
            } else {
                return $this->render('StoreBundle:Cart:index.html.twig', array(
                    'empty' => true,
                ));
            }


            return $this->render('StoreBundle:Cart:index.html.twig', array(
                'empty' => false,
                'product' => $product,
            ));
        } else {
            return $this->render('StoreBundle:Cart:index.html.twig', array(
                'empty' => true,
            ));
        }
    }


    /**
     * @Route("/add/{id}", name="cart_add")
     */
    public function addAction($id)
    {
        // fetch the cart
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('StoreBundle:Articles')->find($id);
        //print_r($product->getId()); die;
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $cart = $session->get('cart', array());

        // check if the $id already exists in it.
        if ($product == NULL) {
            $this->get('session')->setFlash('notice', 'This product is not     available in Stores');
            return $this->redirect($this->generateUrl('cart'));
        } else {
            if (isset($cart[$id])) {

                ++$cart[$id];
              /*  $qtyAvailable = $product->getQuantity();

                if ($qtyAvailable >= $cart[$id]['quantity'] + 1) {
                    $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
                } else {
                    $this->get('session')->setFlash('notice', 'Quantity     exceeds the available stock');
                    return $this->redirect($this->generateUrl('cart'));
                } */
            } else {
                // if it doesnt make it 1
                $cart[$id] = 1;
                //$cart[$id]['quantity'] = 1;
            }
            
            $session->set('cart', $cart);
            //echo('<pre>');
            //print_r($cart); echo ('</pre>');die();
            return $this->redirect($this->generateUrl('cart'));

        }
    }

    /**
     * @Route("/remove/{id}", name="cart_remove")
     */
    public function removeAction($id)
    {
        // check the cart
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $cart = $session->get('cart', array());

        // if it doesn't exist redirect to cart index page. end
        if(!$cart[$id]) { $this->redirect( $this->generateUrl('cart') ); }

        // check if the $id already exists in it.
        if( isset($cart[$id]) ) {
            $cart[$id] = $cart[$id] - 1;
            if ($cart[$id] < 1) {
                unset($cart[$id]);
            }
        } else {
            return $this->redirect( $this->generateUrl('cart') );
        }

        $session->set('cart', $cart);

           //echo('<pre>');
           //print_r($cart); echo ('</pre>');die();

        return $this->redirect( $this->generateUrl('cart') );
    }
}