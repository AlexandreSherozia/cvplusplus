<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\MyFormType;
use AppBundle\entity\item;
use Symfony\Component\HttpFoundation\Session\Session;

class ItemController  extends Controller
{
	/**
     * @Route("/add", name="formpage")
     */
    public function addAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createForm(MyFormType::class);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $data = $form->getData();

            $item = new Item();
            $item->setCollection($data->getCollection());
            $item->setTitle($data->getTitle());
            $item->setCode($data->getCode());
            $item->setDescription($data->getDescription());
            $item->setUser($this->getUser()->getId());

            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();

            return $this->redirectToRoute('items');

        }

        return $this->render('item/add.html.twig', [
                             'form' => $form->createView()
                        ]);
    }

    /**
     * @Route("/item/edit/{id}", name="editItem")
     */
    public function editAction(Request $request,$id)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Item');
        $item = $repository->find($id);
        $form = $this->createForm(MyFormType::class, $item);
        $session = new Session();

        $form->handleRequest($request);

        if ($form->isSubmitted() & $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $session->getFlashBag()->add('info', 'Your post has been modified successfully!');

            return $this->redirectToRoute('items');
        }

        return $this->render('item/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/item/delete/{id}", name="deleteItem")
     */
    public function removeAction(Request $request, $id)
    {
        $session = new Session();

        $this->denyAccessUnlessGranted('ROLE_USER');

        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle\Entity\Item')->find($id);

        if($item->isAuthor($this->getUser()))
        {
            $em->remove($item);
            $em->flush();

            $session->getFlashBag()->add('info', 'Message supprimé!');
        } else {
            $session->getFlashBag()->add('errors', 'ce message ne t\'appartient pas!');
        }

        return $this->redirectToRoute('items');

    }


    /**
     * @Route("/view", name="items")
     */
    public function viewAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AppBundle\Entity\Item')->findAll();

        return $this->render('item/view.html.twig',

                        array('items' => $items));


    }

    /**
     * @Route("/test/{test}", name="test")
     */
    public function testAction(Request $request, $test)
    {



        return $this->redirectToRoute('item',

                        array('test' => $test));


    }




    /**
     * @Route("/item/{id}", name="item")
     */
    public function itemAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle\Entity\Item')->find($id);

        return $this->render('item/oneitem.html.twig',

                        array('item' => $item));

    }
}