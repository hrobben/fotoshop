<?php

namespace StoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use StoreBundle\Entity\Articles;
use StoreBundle\Form\ArticlesType;

/**
 * Articles controller.
 *
 * @Route("/articles")
 */
class ArticlesController extends Controller
{
    /**
     * Lists all Articles entities.
     *
     * @Route("/", name="articles_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('StoreBundle:Articles')->findAll();

        return $this->render('StoreBundle:articles:index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new Articles entity.
     *
     * @Route("/new", name="articles_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $article = new Articles();
        $form = $this->createForm('StoreBundle\Form\ArticlesType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $article->upload();
            
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('articles_show', array('id' => $article->getId()));
        }

        return $this->render('StoreBundle:articles:new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Articles entity.
     *
     * @Route("/{id}", name="articles_show")
     * @Method("GET")
     */
    public function showAction(Articles $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('StoreBundle:articles:show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Articles entity.
     *
     * @Route("/{id}/edit", name="articles_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Articles $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('StoreBundle\Form\ArticlesType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $article->upload();

            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('articles_edit', array('id' => $article->getId()));
        }

        return $this->render('StoreBundle:articles:edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Articles entity.
     *
     * @Route("/{id}", name="articles_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Articles $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('articles_index');
    }

    /**
     * Creates a form to delete a Articles entity.
     *
     * @param Articles $article The Articles entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Articles $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articles_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
}
