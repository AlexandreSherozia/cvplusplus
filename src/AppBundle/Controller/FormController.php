<?php
/**
 * Created by PhpStorm.
 * User: Sandro_Sherozia
 * Date: 09/01/2018
 * Time: 14:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Image;
use AppBundle\Entity\Status;
use AppBundle\Entity\User;
use AppBundle\Form\StatusType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Header;
use AppBundle\Form\HeaderType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class FormController extends Controller
{
    /**
     * @Route("/addForm", name="addheader")
     */
    public function addHeaderAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createForm(HeaderType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $data = $form->getData();

            $curriculum = new Header();
            $curriculum->setTitle($data->getTitle());
            $curriculum->setFirstName($data->getFirstName());
            $curriculum->setName($data->getName());
            $curriculum->setAddress($data->getAddress());
            $curriculum->setZip($data->getZip());
            $curriculum->setCity($data->getCity());
            $curriculum->setTelephone($data->getTelephone());
            $curriculum->setDate(new \DateTime());
            //Les imbriqués
            $curriculum->setImage($data->getImage());
            $curriculum->setSkills($data->getSkills());
            $curriculum->setEducation($data->getEducation());
            $curriculum->setExperience($data->getExperience());
            $curriculum->setWorks($data->getWorks());
            $curriculum->setHobby($data->getHobby());
            $curriculum->setEmail($this->getUser()->getEmail());
            $curriculum->setUserId($this->getUser()->getId());

            //$curriculum->setSlug(null);
                        // le slug est généré automatiquement, car stofBundle utilise les evenemnts Doctrine
                        //preUpdate et postUpdate

            $em = $this->getDoctrine()->getManager();
            $em->persist($curriculum);
            $em->flush();


            $session = new Session();
            $session->getFlashBag()->add('info', 'Félicitations, voici votre CV !');

            return $this->redirectToRoute('onecurriculum', array('slug'=>$curriculum->getSlug()));
        }
        return $this->render('curriculum/addCvForm.html.twig',
                            array('form'=>$form->createView()));
        }



        /**
         * @Route("/listcurriculums", name="listcurriculums")
         */
       public function vueCurriculumsAction(Request $request)
       {
       $em = $this->getDoctrine()->getManager();
       $list = $em->getRepository('AppBundle\Entity\Header')->getAllPublishedItems();

           /**
            * @var $paginator \Knp\Component\Pager\Paginator
            */
            $paginator = $this->get('knp_paginator');
            $listCurriculums = $paginator->paginate(
            $list,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
       );


       $quantityOfPublishedItems =  $em->getRepository('AppBundle\Entity\Header')->quantityOfPublishedItems();


       return $this->render('curriculum/listCurriculum.html.twig',
                           array('listCurriculums' => $listCurriculums,
                                 'quantityCv'      => $quantityOfPublishedItems));

       }

    /**
     * @Route("/curriculum/{slug}", name="onecurriculum")
     */
    public function oneCurriculumAction(Request $request, Header $header)
        {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle\Entity\Header')->find($header);


            $session = new Session();

            if(null===$item){

                $session->getFlashBag()->add('error', 'Le cv avec cet identifient n\'existe pas!!');

            }

        return $this->render('curriculum/onecurriculum.html.twig',

            array('item' => $item));

        }



    /**
     * @Route("/mon-espace/{slug}", name="myspace")
     */
    public function mySpaceAction(Request $request, User $user)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createForm(HeaderType::class);
        $form->handleRequest($request);
        $session = new Session();

        if ($form->isSubmitted() && $form->isValid()) {


            $data = $form->getData();

            $publish = new Header();
            $publish->setPublished($data->getPublished());

            $em = $this->getDoctrine()->getManager();
            $em->persist($publish);
            $em->flush();

            $session->getFlashBag()->add('info', 'Félicitations, votre CV vient d\'être publié !');

            }


        $em = $this->getDoctrine()->getManager();
            $myCvList = $em->getRepository('AppBundle\Entity\Header')->findByAuthor($user);

        $quantityCvSpace =  $em->getRepository('AppBundle\Entity\Header')->quantityCvSpace($user);


        if($quantityCvSpace < 1) {

            $session->getFlashBag()->add('warning', 'Vous n\'avez aucun CV dans votre espace !');
            }


            return $this->render('curriculum/myCvSpace.html.twig',

                array('myCvList'    => $myCvList,
                      'form'        =>$form->createView()));

    }




    /**
     * @Route("/modification/{slug}", name="editcurriculum")
     */
    public function editAction(Request $request, Header $header)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $repository = $this->getDoctrine()->getRepository('AppBundle\Entity\Header');
        $curriculum = $repository->find($header);
        $form = $this->createForm(HeaderType::class, $curriculum);
        $session = new Session();

        $form->handleRequest($request);

        if($curriculum->isAuthor($this->getUser()))
        {

            if ($form->isSubmitted() & $form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $session->getFlashBag()->add('info', 'Votre CV a été modifié avec succès !');

                return $this->redirectToRoute('onecurriculum', array('slug' => $curriculum->getSlug()));

            }

        } else {
            $session->getFlashBag()->add('deny', ' vous essayez de modifier le
             CV , dont vous n\'êtes pas le propriétaire !');

            return $this->render('curriculum/denyAccess.html.twig');
            //$this->denyAccessUnlessGranted('ROLE_ADMIN');
        }
        return $this->render('curriculum/edit.html.twig', [
            'form' => $form->createView()
        ]);
    }




    /**
     * @Route("/item/remove/{id}", name="removeItem")
     */
    public function removeAction(Request $request, $id)
    {
        $session = new Session();


        $this->denyAccessUnlessGranted('ROLE_USER');

        $em = $this->getDoctrine()->getManager();
        $header = $em->getRepository('AppBundle\Entity\Header')->find($id);



        if($header->isAuthor($this->getUser()))
        {
            $em->remove($header);
            $em->flush();

            $session->getFlashBag()->add('info', 'CV supprimé avec succès !');
        } else {
            $session->getFlashBag()->add('deny', 'vous essayez de supprimer le CV, qui ne vous appartient pas !');

            return $this->render('curriculum/denyAccess.html.twig');
        }

        return $this->redirectToRoute('myspace', ['id'=> $header->getUserId()]);

    }

    /**
     * @Route("/cvForPdf/{id}", name="cvForPdf")
     */
    public function cvForPdfAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle\Entity\Header')->find($id);

        $session = new Session();

        if(null===$item){

            $session->getFlashBag()->add('error', 'Le cv avec cet identifient n\'existe pas!!');

        }

        return $this->render('curriculum/cvForPdf.html.twig',

            array('item'   => $item));

    }


    /**
     * @Route("/pdf/{id}", name="generatePdf")
     */
    public function generatePdfAction(Request $request, $id)
    {
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        //$snappy->setOption('page-size', 'A4');
        $snappy->setOption('disable-javascript', true);


        //$snappy->setOption('page-height', '1170px');
        //$snappy->setOption('page-width', '827px');
        $snappy->setOption('encoding', 'UTF-8');
        $snappy->setOption('margin-right', '0mm');
        $snappy->setOption('margin-left', '0mm');
        $snappy->setOption('margin-top', '0mm');
        $snappy->setOption('margin-bottom', '0mm');


        $url = $this->generateUrl('cvForPdf', array('id'=>$id), UrlGeneratorInterface::ABSOLUTE_URL);


        $filename = "downloadpdf";

        return new Response(
            $snappy->getOutPut($url),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$filename.'.pdf"'
            )
        );
    }


    /**
     * @Route("/test/{id}", name="generate")
     */
    public function testAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $item = $em->getRepository('AppBundle\Entity\Header')->find($id);



        return $this->render('curriculum/cvForPdf.html.twig',

            array('item'   => $item));

    }

    /**
     * @Route("/testAjax", name="ajaxtest")
     */
  /**  public function ajaxTestAction(Request $request)
    {
        if ($request->isXmlHttpRequest()){
            $id = $request->get('id');
            $connection = $this->get('collectmaster');

            $query = "select * from entity_header where entity_header.id = " . $id;
            $rows = $connection->fetchAll($query);
            return new JsonResponse(array('data' => json_encode($rows)));
        }

        return new Response('no Json !');
    }*/


}